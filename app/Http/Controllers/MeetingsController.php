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
        //return $meetings;
        $meetings = Meetings::all();
        return view('meetings.index',compact('meetings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('meetings.create');
        
    }

    public function delete(Meetings $meetings)
    {
        return view ('meetings.delete', compact('meetings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        if(Meetings::Create($request->all())){
            return true;
        }*/

            Meetings::create([        
            'start_time'=> request('start_time'),
            'end_time'=> request('end_time'),
            'end_time'=> request('end_time'),
            'employeeid' =>request('employeeid'),
            'room_id'=> request('room_id')
            ]);

            return redirect()->route('meetings.index')->withSuccess('Meeting has been created');
            

            
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
        return view('meetings.show', compact('meetings'));
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
        /*if($meetings->fill($request->all())->save()){
            return true;
        }*/
        /*Meetings::update([        
            'start_time'=> request('start_time'),
            'end_time'=> request('end_time'),
            'end_time'=> request('end_time'),
            'employeeid'=> request('employeeid'),
            'room_id'=> request('room_id')
            ]);
            */

            
            $meetings->start_time=request('start_time');
            $meetings->end_time=request('end_time');
            $meetings->employeeid=request('employeeid');
            $meetings->room_id=request('room_id');
            $meetings->save();
            
            return redirect()->route('meetings.index')->withSuccess('Meeting has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meetings  $meetings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meetings $meetings)
    {
        /*
        if($meetings->delete()){
            return true;
        }*/
        $meetings->delete();

        return redirect()->route('meetings.index')->withSuccess('Meeting has been deleted');

    }
}
