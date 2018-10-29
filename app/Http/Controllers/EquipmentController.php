<?php

namespace App\Http\Controllers;

use App\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $equipment = Equipment::all();
        return view('equipment.index', compact('equipment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('equipment.create');

    }

    public function delete(Equipment $equipment)
    {
        return view ('equipment.delete', compact('equipment'));
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
        //if(Equipment::Create($request->all())){
            //return true;
        //}
        Equipment::create([
            'equipment_name' => request('equipment_name'),
            'description' => request('description'),
            'availability_status' => request('availability_status')
        ]);
       
        return redirect()->route('equipment.index')->with('success', 'Equipment has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Equipment $equipment)
    {
        //
        return view('equipment.show', compact('equipment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipment $equipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipment $equipment)
    {
        /*if($equipment->fill($request->all())->save()){
            return true;
        }*/
        $equipment->equipment_name = request('equipment_name');
        $equipment->description = request('description');
        $equipment->availability_status = request('availability_status');
        $equipment->save();

        return redirect()->route('equipment.index')->withSuccess('Equipment has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipment $equipment)
    {
        /*
        if($equipment->delete()){
            return true;
        }*/
        $equipment->delete();

        return redirect()->route('equipment.index')->withSuccess('Equipment has been deleted');
    }
}
