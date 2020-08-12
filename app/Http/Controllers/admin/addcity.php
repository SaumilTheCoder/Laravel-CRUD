<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class addcity extends Controller
{
    //
    public function addcity(Request $req)
    {
        $country=$req->input('country');
        $state=$req->input('state');
        $city=$req->input('city');

        $data=array('country'=>$country,'state'=>$state,'city'=>$city);

        return view('admin/viewcity')->with($data);
    }
}
