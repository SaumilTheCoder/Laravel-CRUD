<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class useradd extends Controller
{
    //
    public function add(Request $req)
    {
        $firstname=$req->input('fname');
        $lastname=$req->input('lname');
        $image=$req->file('image1');
        $email=$req->input('email');
        $mobileno=$req->input('mobilenumber');
        $gender=$req->input('gender');
        $date=$req->input('date');
        $address=$req->input('address');

        $data=array('fname'=>$firstname,'lname'=>$lastname,'image'=>$image,'email'=>$email,'mobileno'=>$mobileno,'gender'=>$gender,'date'=>$date,'address'=>$address);
        
        return view('admin/view1')->with($data);

    }
}
  