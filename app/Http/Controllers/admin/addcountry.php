<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class addcountry extends Controller
{
    //
    public function addcoun(Request $req)

    {
        $countryname=$req->input('countryname');

        $data=array('countryname'=>$countryname);

        return view('admin/viewcountry')->with($data);
    }
}
