<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\customeCity;
use App\customeState;
use App\customeCountry;

class City extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $city= customeCity::all();
        return view('admin.city.index')->with('city',$city);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $country=customeCountry::pluck('countryname','id');
        $state=customeState::pluck('statename','id');

        $data=array('country'=>$country,'state'=>$state);
        return view('admin.city.create')->with($data);


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
        $city= new customeCity();

        $city->countryname=$request->input('country');
        $city->statename=$request->input('state');
        $city->cityname=$request->input('city');

        $city->save();

        $city=customeCity::all();
        return view('admin.city.index')->with('city',$city);

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
        $citymodel=customeCity::find($id);

        $country=customeCountry::pluck('countryname','id');
        $state=customeState::pluck('statename','id');

        $data=array('citymodel'=>$citymodel,'country'=>$country,'state'=>$state);

        return view('admin.city.cityupdate')->with($data);

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
        $city= customeCity::find($id);

        $city->countryname=$request->input('country');
        $city->statename=$request->input('state');
        $city->cityname=$request->input('city');

        $city->save();

        // $city=customeCity::all();
        // return view('admin.city.viewcity')->with('city',$city);
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
        $citymodel=customeCity::find($id);

        $citymodel->delete();

        return redirect('admin/city/')->with("sucess","sucessfully");
    }
}
