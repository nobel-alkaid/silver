<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Room;
use App\Models\Client;
use App\Models\Sejour;
use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Jobs\SendInvoiceMailJob;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreSejourRequest;
use App\Http\Requests\UpdateSejourRequest;

class SejourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.sejours.index', [
            'sejours' => Sejour::paginate(10),
            'my_actions' => $this->sejour_actions(),
            'my_attributes' => $this->sejour_columns(),
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(Client::first()->getFullname());
        return view('dashboard.sejours.new', [
            'my_fields' => $this->sejour_fields(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSejourRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSejourRequest $request)
    {
        $sejour = new Sejour();
        $client = Client::find($request->client);
        $room = Room::find($request->room);
        $sejour->client()->associate($client);
        $sejour->room()->associate($room);
        $sejour->date = $request->date;
        $sejour->start_time = $request->start_time;
        $sejour->end_time = $request->end_time;
        $sejour->montant = $this->getSejourPrice($request->room, $request->start_time, $request->end_time);
        if($sejour->save()) {
            $invoice = new Invoice();
            $invoice->sejour()->associate($sejour);
            $invoice->save();
            Alert::toast('Le séjour a été enregistré !', 'success');
            return redirect()->route('dashboard.sejours.index');
        }
        else {
            Alert::toast('Une erreur est survenue', 'erreur');
            return redirect()->back();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sejour  $sejour
     * @return \Illuminate\Http\Response
     */
    public function show(Sejour $sejour)
    {
        return view('dashboard.sejours.show', [
            'sejour' => $sejour
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sejour  $sejour
     * @return \Illuminate\Http\Response
     */
    public function edit(Sejour $sejour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSejourRequest  $request
     * @param  \App\Models\Sejour  $sejour
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSejourRequest $request, Sejour $sejour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sejour  $sejour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sejour $sejour)
    {
        //
    }

    public function streamInvoice(Invoice $invoice) 
    {
        return PDF::loadView('pdf.invoice', compact('invoice'))->stream();     
    }

    public function sendInvoice(Invoice $invoice)
    {
        $name = 'Invoices/' . now()->format('d_m_y_H_s') . '_000' . $invoice->id . '.pdf';
        PDF::setOptions(['dpi' => '150', 'defaultFont' => 'sans-serif']);
        $invoice_pdf = PDF::loadView('pdf.invoice', compact('invoice'))->download()->getOriginalContent();
        Storage::disk('public')->put($name, $invoice_pdf);
        $document = Storage::url($name);
        SendInvoiceMailJob::dispatch($invoice, $document);
        Alert::toast('Le mail a été envoyé', 'success');
        return redirect()->back();
    }

    private function sejour_columns() {
        $columns = (object) [
            'client' => 'Nom client',
            'room' => 'Numéro de chambre',
            'date' => 'Date du séjour',
            'start_time' => "Heure de début",
            'end_time' => 'Heure de fin',
            'montant' => 'Montant'
        ];
        return $columns;
    }

    private function sejour_actions(){
        $actions = (object) array(
            'show' => "Details",
        );
        return $actions;
    }

    private function sejour_fields() {
        $fields = [
            'client' => [
                'title' => 'Client',
                'field' => 'model',
                'options' => Client::all(),
                'column' => 'fullname'
            ],
            'room' => [
                'title' => 'Chambre',
                'field' => 'model',
                'options' => Room::all(),
                'column' => 'number' 
            ],
            'date' => [
                'title' => 'Date du séjour',
                'field' => 'date',
            ],
            'start_time' => [
                'title' => 'Heure de début',
                'field' => 'time',
            ],
            'end_time' => [
                'title' => 'Heure de fin',
                'field' => 'time',
            ],
        ];
        return $fields;
    }


    /**
     * Return the price af a sejourn of a client
     *
     * @param [type] $room
     * @param [type] $start_time
     * @param [type] $end_time
     * @return float
     */
    protected function getSejourPrice($room_id, $start_time, $end_time) :float
    {
        $room = Room::find($room_id);
        $spent_hours = $this->convertTime($start_time, $end_time);
        return $room->hourly_price * $spent_hours;
    }

   /**
    * Return the converted number of hours spent in a room
    *
    * @param [type] $start_time
    * @param [type] $end_time
    * @return integer
    */
    protected function convertTime($start_time, $end_time) :int
    {
        $start_moment = Carbon::parse($start_time);
        $end_moment = Carbon::parse($end_time);
        $duration = $end_moment->diffAsCarbonInterval($start_moment);
        $minutes = $duration->minutes;
        $final_duration = $minutes < 30 ? $duration->hours : $duration->hours + 1;
        return $final_duration;
    }
}
