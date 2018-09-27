<?php

namespace App\Http\Controllers;

use App\Meetings;
use Illuminate\Http\Request;

class MeetingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $meetings = Meetings::all();
        return $meetings;
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
        if(Meetings::Create($request->all())){
            return true;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meetings  $meetings
     * @return \Illuminate\Http\Response
     */
    public function show(Meetings $meetings)
    {
        //
        return $meetings;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meetings  $meetings
     * @return \Illuminate\Http\Response
     */
    public function edit(Meetings $meetings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meetings  $meetings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meetings $meetings)
    {
        //
        if($meetings->fill($request->all())->save()){
            return true;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meetings  $meetings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meetings $meetings)
    {
        //
        if($meetings->delete()){
            return true;
        }
    }
}
