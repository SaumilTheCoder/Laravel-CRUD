<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\customeUser;
use App\customeCountry;
use App\customeState;
use App\customeCity;


class User extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //

        $user= customeUser::all();
        return view('admin.user.index')->with('users',$user);
        // $user= customeUser::all()->toarray();
        // return view('admin.view1',compact('user'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $usermodel=customeUser::find($id);

        $country= customeCountry::pluck('countryname','id');
        $state= customeState::pluck('statename','id');
        $city=customeCity::pluck('cityname','id');

        // $data=array('usermodel'=>$usermodel,'user'=>$user,'userstate'=>$userstate,'usercity'=>$usercity,
        // 'userradio'=>$userradio);

        $data=array('country'=>$country,'state'=>$state,'city'=>$city);
        return view('admin.user.create')->with($data);

        // return view('admin/user/create');
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
        $user= new customeUser();

        if($request->hasFile('image1'))
        {
            //File Name With Extension..
            $fileNameWithExt=$request->file('image1')->getClientOriginalName();

            //File Name With Out Extension..
            $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);

            //Get Jsut Extension..
            $ext=$request->file('image1')->getClientOriginalExtension();

            //Final Name..
            $image_name=$filename .'_' . time() .'.' . $ext;
             $path=$request->file('image1')->storeAs('public/cover_images',$image_name);

        }
        else
        {
            $image_name="noimage.jpg";
        }
        $user->fname=$request->input('fname');
        $user->lname=$request->input('lname');
        $user->image1=$image_name;
        $user->email=$request->input('email');
        $user->mobilenumber=$request->input('mobilenumber');
        $user->gender=$request->input('gender');
       // $radio = $request->get('radion_button', 0);
         $user->date=$request->input('date');
        $user->address=$request->input('address');


        $vehicleString = implode(",",  $request->input('hobby') );
        //  foreach ($usertemp as $key => $value) {
        //      $final_string.=$value."" ;
        //  }

         $user->hobby=$vehicleString;


         $user->country=$request->input('country');
         $user->state=$request->input('state');
         $user->city=$request->input('city');

          $user->save();

        // $user= customeUser::all();

        $user= customeUser::all();
       return view('admin.user.index')->with('users',$user);

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
        $usermodel=customeUser::find($id);

        $user=customeCountry::pluck('countryname','id');
        $userstate=customeState::pluck('statename','id');
        $usercity=customeCity::pluck('cityname');

        $userradio=customeUser::pluck('gender','id');

        $data=array('usermodel'=>$usermodel,'user'=>$user,'userstate'=>$userstate,'usercity'=>$usercity,
        'userradio'=>$userradio);

        return view('admin.user.update')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
     }


    public function update(Request $request, $id)
    {
        //

        $user=customeUser::find($id);

        $user->fname=$request->input('fname');
        $user->lname=$request->input('lname');
        // $user->image1=" ";
        // $user->image1=$image_name;
         $user->gender=$request->input('gender');
        $user->email=$request->input('email');
        $user->mobilenumber=$request->input('mobilenumber');
        // $user->gender=$request->input('gender');
       // $radio = $request->get('radion_button', 0);
         $user->date=$request->input('date');
        $user->address=$request->input('address');
        $vehicleString = implode(",",  $request->input('hobby') );
        //  foreach ($usertemp as $key => $value) {
        //      $final_string.=$value."" ;
        //  }


        if($request->hasFile('image1'))
        {
            //File Name With Extension..
            $fileNameWithExt=$request->file('image1')->getClientOriginalName();

            //File Name With Out Extension..
            $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);

            //Get Jsut Extension..
            $ext=$request->file('image1')->getClientOriginalExtension();

            //Final Name..
            $image_name=$filename .'_' . time() .'.' . $ext;
             $path=$request->file('image1')->storeAs('public/cover_images',$image_name);

             $user->image1=$image_name;


        }


         $user->hobby=$vehicleString;

        //  $user->hobby=$request->input('hobby');
         $user->country=$request->input('country');
         $user->state=$request->input('state');
         $user->city=$request->input('city');

        $user->save();
        $user= customeUser::all();
        return view('admin.user.index')->with('users',$user);

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
        $usermodel=customeUser::find($id);

        $usermodel->delete();

        return redirect('admin/user/')->with("sucess","sucessfully");

    }
}
