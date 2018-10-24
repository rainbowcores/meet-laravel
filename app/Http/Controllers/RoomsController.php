<?php

namespace App\Http\Controllers;

use App\Rooms;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rooms = Rooms::all();
        return view('rooms.index',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function delete(Rooms $rooms)
    {
        return view ('rooms.delete', compact('rooms'));
    }


    public function store(Request $request)
    {
        /*
        if(Rooms::Create($request->all())){
            return true;
        }*/
        Rooms::create([
            'room_id'=> request('room_id'),
            'room_name'=> request('room_name'),
            'location'=> request('location'),
            'capacity'=> request('capacity'),
            'room_description'=> request('room_description'),
            'availability_status'=> request('availability_status')
        ]);

        return redirect()->route('rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function show(Rooms $rooms)
    {
        //
        return view('rooms.show', compact('rooms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function edit(Rooms $rooms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rooms $rooms)
    {
        /*if($rooms->fill($request->all())->save()){
            return true;
        }*/
            $rooms->room_name=request('room_name');
            $rooms->location= request('location');
            $rooms->capacity= request('capacity');
            $rooms->room_description= request('room_description');
            $rooms->availability_status= request('availability_status');
            $rooms->save();

            return redirect()->route('rooms.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rooms $rooms)
    {
        /*
        if($rooms->delete()){
            return true;
        }*/
        $rooms->delete();

        return redirect()->route('rooms.index');
    }
}
