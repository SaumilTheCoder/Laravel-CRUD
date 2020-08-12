<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\customeAddarea;
use App\customeCountry;
use App\customeState;
use App\customeCity;

class Addarea extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $addarea= customeAddarea::all();
        return view('admin.area.index')->with('areas',$addarea);

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
        $city=customeCity::pluck('cityname','id');

        $data=array('country'=>$country,'state'=>$state,'city'=>$city);
        return view('admin.area.create')->with($data);
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

        $area = new customeAddarea();

        $area->areaname=$request->input('area');
        $area->longitude=$request->input('longitude');
        $area->latitude=$request->input('latitude');
        $area->country=$request->input('country');
        $area->state=$request->input('state');
        $area->city=$request->input('city');
        $area->neararea=$request->input('neararea');

        $area->save();

        $area= customeAddarea::all();
        return view('admin.area.index')->with('areas',$area);

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

        $areamodel=customeAddarea::find($id);

        $area=customeCountry::pluck('countryname','id');
        $areastate=customeState::pluck('statename','id');
        $areacity=customeCity::pluck('cityname','id');

        $data=array('areamodel'=>$areamodel,'area'=>$area,'areastate'=>$areastate,'areacity'=>$areacity);

        return view('admin.area.addareaupdate')->with($data);


        // $carmodel = CarModelWithVarient::find($id);
        // $carmakes = CarName::pluck('name', 'id');
        // $carnames = Car::pluck('carname', 'id');
        // $data = array('carmodel'=>$carmodel , 'carnames'=>$carnames , 'carmakes'=>$carmakes);

        // return view("carmodel.update")->with($data);

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
        $areamodel=customeAddarea::find($id);

        $areamodel->delete();

        return redirect('admin/area/')->with("sucess","sucessfully");

    }
}
