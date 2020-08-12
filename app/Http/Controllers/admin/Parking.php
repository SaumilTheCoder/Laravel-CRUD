<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\customeParking;
use App\customeCountry;
use App\customeState;
use App\customeCity;
use App\customeAddarea;

class Parking extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $parking= customeParking::all();
        return view('admin.parking.index')->with('parkings',$parking);


        // $user= customeUser::all();
        // return view('admin.view1')->with('users',$user);


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
        $city=customeCity::pluck('cityname','id');
        $parkingarea=customeAddarea::pluck('neararea','id');

        $data=array('country'=>$country,'state'=>$state,'city'=>$city,'parkingarea'=>$parkingarea);
        return view('admin.parking.create')->with($data);

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
        $parking= new customeParking();

        $parking->fourwheeler=$request->input('fourwheeler');
        $parking->twowheeler=$request->input('twowheeler');
        $parking->tempo=$request->input('tempo');
        $parking->country=$request->input('country');
         $parking->state=$request->input('state');
         $parking->city=$request->input('city');
         $parking->areaname=$request->input('area');

         $parking->parkingname=$request->input('parkingname');
         $parking->image1=" ";

         $parking->save();

         $parking= customeParking::all();
         return view('admin.parking.index')->with('parkings',$parking);

        // return view('admin/parkingview');
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
        $parkingmodel=customeParking::find($id);

        $parkingcountry=customeCountry::pluck('countryname','id');
        $parkingstate=customeState::pluck('statename','id');
        $parkingcity=customeCity::pluck('cityname','id');

        $parkingarea=customeAddarea::pluck('areaname','id');

        $data=array('parkingmodel'=>$parkingmodel,'parkingcountry'=>$parkingcountry,'parkingstate'=>$parkingstate,'parkingcity'=>$parkingcity,'parkingarea'=>$parkingarea);

        return view('admin.parking.parkingupdate')->with($data);
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
        $parking=customeParking::find($id);

        $parking->fourwheeler=$request->input('fourwheeler');
        $parking->twowheeler=$request->input('twowheeler');
        $parking->tempo=$request->input('tempo');
        $parking->country=$request->input('country');
         $parking->state=$request->input('state');
         $parking->city=$request->input('city');
         $parking->areaname=$request->input('area');

         $parking->parkingname=$request->input('parkingname');
         $parking->image1=" ";

         $parking->save();

        //  $parking= customeParking::all();
        //  return view('admin.parking.index')->with('parkings',$parking);

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
        $parkingmodel=customeParking::find($id);
        $parkingmodel->delete();

        return redirect('admin\parking')->with("Sucess","Sucessfully");
    }
}
