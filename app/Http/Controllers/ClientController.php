<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Client;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Symfony\Component\Console\Input\Input;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.clients.index', [
            'clients' => Client::paginate(10),
            'my_actions' => $this->client_actions(),
            'my_attributes' => $this->client_columns(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.clients.new', [
            'my_fields' => $this->client_fields(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        $client = new Client();
        $client->firstname = $request->firstname;
        $client->lastname = $request->lastname;
        $client->sexe = $request->sexe;
        $client->birthday = $request->birthday;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->id_card_number = $request->card_number;
        
        if($request->file('image')) {
            try {
                $filename = now()->format('d_m_y_H_s') . "_" . $request->firstname ."_" .$request->lastname . '_avatar.' . $request->image->extension();
                $client->image = $request->image->storeAs('Customers', $filename, 'public');
            }
            catch (Exception $e) {
                Alert::toast('Une erreur est survenue avec l\'image');
                return redirect()->back()->withInput($request->input());
            }
        }
        if($client->save()) {
            Alert::toast('Enregistrement du client éffectué', 'success');
            return redirect()->route('dashboard.clients.index');
        }
        else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back()->withInput($request->input());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('dashboard.clients.show', [
            'client' => $client,
            'birthday' => Carbon::createFromFormat('Y-m-d', $client->birthday)
            ->format('j F Y')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }

    private function client_columns() {
        $columns = (object) [
            'image' => 'Image',
            'lastname' => 'Nom',
            'firstname' => 'Prénoms',
            'sexe' => "Sexe",
            'email' => 'Email',
        ];
        return $columns;
    }

    private function client_actions(){
        $actions = (object) array(
            'show' => "Details",
            'edit' => "Modifier",
            'delete' => "Supprimer",
        );
        return $actions;
    }

    private function client_fields() {
        $fields = [
            'lastname' => [
                'title' => 'Nom de famille',
                'field' => 'text'
            ],
            'firstname' => [
                'title' => 'Prénoms',
                'field' => 'text'
            ],
            'sexe' => [
                'title' => 'Sexe',
                'field' => 'select',
                'options' => Client::sexes(),
            ],
            'birthday' => [
                'title' => 'Date de naissance',
                'field' => 'date',
            ],
            'phone' => [
                'title' => 'Numéro de téléphone',
                'field' => 'text',
            ],
            'email' => [
                'title' => 'Adresse mail',
                'field' => 'email',
            ],
            'card_number' => [
                'title' => 'Numéro Carte Identité',
                'field' => 'number',
            ],
            'image' => [
                'title' => 'Image / Photo',
                'field' => 'file',
            ],
        ];
        return $fields;
    }
}
