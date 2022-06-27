<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSejourRequest;
use App\Http\Requests\UpdateSejourRequest;
use App\Models\Sejour;

class SejourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreSejourRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSejourRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sejour  $sejour
     * @return \Illuminate\Http\Response
     */
    public function show(Sejour $sejour)
    {
        //
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
}
