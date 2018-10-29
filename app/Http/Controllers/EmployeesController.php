<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;


class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Employees::all();
        return view('employees.index', compact('employees'));
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view ('employees.create');
    
    }

    public function delete(Employees $employees)
    {
        return view ('employees.delete', compact('employees'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
         /*
        if(Employees::Create($request->all())){
            return true;
        }*/
            Employees::create([
            'username' => $request->get('username'),
            'password'=> $request->get('password'),
            'type'=> $request->get('type'),
            'department'=> $request->get('department'),
            'telephone'=> $request->get('telephone'),
            'email'=> $request->get('email')
            ]);
        //$employees->save();
        return redirect()->route('employees.index')->withSuccess('Employee has been registered');

        

    
    
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(Employees $employees)
    {
        //
        return view('employees.show', compact('employees'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit(Employees $employees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employees $employees)
    {
        /*
        if($employees->fill($request->all())->save()){
            return true;
        }*/
        $employees ->username = request('username');
        $employees->password= request('password');
        $employees->type= request('type');
        $employees->department= request('department');
        $employees->telephone= request('telephone');
        $employees->email =request('email');
        $employees->save();

        return redirect()->route('employees.index')->withSuccess('Employee has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employees $employees)
    {
        /*
        if($employees->delete()){
            return true;
        }*/
        $employees->delete();

        return redirect()->route('employees.index')->withSuccess('Employee has been deleted');
    }
}


    