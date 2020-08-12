<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class parkingform extends Controller
{
    //
    public function addparking(Request $req)
    {
        $fourwheeler=$req->input('fourwheeler');
        $twowheeler=$req->input('twowheeler');
        $tempo=$req->input('tempo');

        $data=array('fourwheeler'=>$fourwheeler,'twowheeler'=>$twowheeler,'tempo'=>$tempo);

        return view('admin/parkingview')->with($data);
       
    }
}
