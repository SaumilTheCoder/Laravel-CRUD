<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\customeState;
use App\customeCountry;

class State extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $state= customeState::all();
        return view('admin.state.index')->with('states',$state);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $country= customeCountry::pluck('countryname','id');
        $state= customeState::pluck('statename','id');
        $data=array('country'=>$country,'state'=>$state);
        return view('admin.state.create')->with($data);

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

        $state= new customeState();

        $state->countryname=$request->input('country');
        $state->statename=$request->input('statename');

        $state->save();

        $state= customeState::all();
       return view('admin.state.index')->with('state',$state);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $statemodel=customeState::find($id);

        $statecountry=customeCountry::pluck('countryname','id');
        $state1=customeState::pluck('statename','id');

        $data=array('statemodel'=>$statemodel,'state'=>$state1,'statecountry'=>$statecountry);

        return view('admin.state.stateupdate')->with($data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $state=customeState::find($id);

        $state->country=$request->input('country');
        $state->state=$request->input('state');

        $state->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $statemodel=customeState::find($id);
        $statemodel->delete();

        return redirect('admin\state')->with("Sucess","Sucessfully");
    }
}
