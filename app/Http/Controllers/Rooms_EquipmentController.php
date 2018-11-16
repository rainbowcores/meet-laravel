<?php

namespace App\Http\Controllers;

use App\Rooms_Equipment;
use Illuminate\Http\Request;
use App\Rooms;
use App\Equipment;

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
        $rooms_Equipment = Rooms_Equipment::all();
        return view('rooms_Equipment.index', compact('rooms_Equipment'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $rooms = Rooms::pluck('room_name', 'room_id');
        $equipment = Equipment::pluck('equipment_name', 'equipment_id');
        return view('rooms_Equipment.create')->with('rooms', $rooms)->with('equipment', $equipment);
       
        

    }

    public function delete(Rooms_Equipment $rooms_Equipment)
    {
        return view ('rooms_Equipment.delete', compact('rooms_Equipment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*if(Rooms_Equipment::Create($request->all())){
        return true;
        }*/
            Rooms_Equipment::create([        
            'equipment_id'=> request('equipment_id'),
            'room_id'=> request('room_id')
            ]);

            return redirect()->route('rooms_Equipment.index')->withSuccess('(Rooms_Equipment has been added');

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
        return view('rooms_Equipment.show', compact('rooms_Equipment'));

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
        /*if($rooms_Equipment->fill($request->all())->save()){
            return true;
        }*/
        $rooms_Equipment-> equipment_id=request('equipment_id');
        $rooms_Equipment-> room_id=request('room_id');
        $rooms_Equipment->save();

        return redirect()->route('rooms_Equipment.index')->withSuccess('(Rooms_Equipment has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rooms_Equipment  $rooms_Equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rooms_Equipment $rooms_Equipment)
    {
        /*
        if($rooms_Equipment->delete()){
            return true;
        }*/
        $rooms_Equipment->delete();

        return redirect()->route('rooms_Equipment.index')->withSuccess('(Rooms_Equipment has been deleted');

    }
}
