<?php

namespace App\Http\Controllers;

use App\Rooms_Equipment;
use Illuminate\Http\Request;

class Rooms_EquipmentController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rooms_Equipment  $rooms_Equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Rooms_Equipment $rooms_Equipment)
    {
        //
        return view('rooms_Equipment.rooms_Equipment', ['rooms_Equipment => $rooms_Equipment']);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rooms_Equipment  $rooms_Equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Rooms_Equipment $rooms_Equipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rooms_Equipment  $rooms_Equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rooms_Equipment $rooms_Equipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rooms_Equipment  $rooms_Equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rooms_Equipment $rooms_Equipment)
    {
        //
    }
}
