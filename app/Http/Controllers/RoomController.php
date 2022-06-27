<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use RealRashid\SweetAlert\Facades\Alert;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.rooms.index', [
            'rooms' => Room::paginate(12),
            'my_actions' => $this->room_actions(),
            'my_attributes' => $this->room_columns(),
            'my_fields' => $this->room_fields()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoomRequest $request)
    {

        $room = new Room();
        $room->number = $request->number;
        $room->mode = $request->mode;
        $room->hourly_price = $request->hourly_price;
        $room->description = $request->description;
        if($room->save()) {
            Alert::toast('La chambre a été enregistrée avec succès', 'success');
            return redirect()->route('dashboard.rooms.index');
        }
        else {
            Alert::toast('Une erreur est survenue. Veuillez réessayer');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('dashboard.rooms.show', [
            'room' => $room
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return view('dashboard.rooms.edit', [
            'room' => $room,
            'my_fields' => $this->room_fields(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomRequest  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        $room->number = $request->number;
        $room->mode = $request->mode;
        $room->hourly_price = $request->hourly_price;
        $room->description = $request->description;
        if($room->save()) {
            Alert::toast('Les informations ont été mis à jour', 'success');
            return redirect()->route('dashboard.rooms.index');
        }
        else {
            Alert::toast('Une erreur est survenue. Veuillez réessayer');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        if($room->delete()) {
            Alert::toast("L'élément a été supprimé", 'success');
            return redirect()->route('dashboard.rooms.index');
        }
        else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back();
        }
    }

    private function room_columns() {
        $columns = (object) [
            'number' => 'Numero de chambre',
            'mode' => 'Mode',
            'hourly_price' => 'Prix horaire',
        ];
        return $columns;
    }

    private function room_actions(){
        $actions = (object) array(
            'show' => "Details",
            'edit' => "Modifier",
            'delete' => "Supprimer",
        );
        return $actions;
    }

    private function room_fields() {
        $fields = [
            'number' => [
                'title' => 'Numero',
                'field' => 'text'
            ],
            'mode' => [
                'title' => 'Mode',
                'field' => 'select',
                'options' => Room::modes(),
            ],
            'hourly_price' => [
                'title' => 'Prix horaire',
                'field' => 'number',
            ],
            'description' => [
                'title' => 'Description',
                'field' => 'textarea',
            ],
        ];
        return $fields;
    }
}
