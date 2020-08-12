<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class addstate extends Controller
{
    //
    public function addstat(Request $req)
    {
        $statename=$req->input('statename');

        $data=array('statename'=>$statename);

        return view('admin/viewstate')->with($data);
    }
}
