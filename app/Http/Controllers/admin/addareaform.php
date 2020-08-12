<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class addareaform extends Controller
{
    //
    public function areaadd(Request $req)
    {
        $areaname=$req->input('area');
        $longitude=$req->input('longitude');
        $latitude=$req->input('latitude');

        $data=array('area'=>$areaname,'longitude'=>$longitude,'latitude'=>$latitude);

        return view('admin/viewvehicleandarea')->with($data);
        
    }
}
