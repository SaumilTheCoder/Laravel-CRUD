<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formcontroller extends Controller
{
    //
    public function dashboard()
    {
        return view('form');
    }

    public function formSubmit()
    {
        echo "Form is Submited..";
    }
}
