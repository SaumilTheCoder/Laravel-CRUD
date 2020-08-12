<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin/dash',function(){
    return view('admin/dash');
});


// Route::get('/register', function () {
//     return view('register');
// });


// ADMIN SIDE
// Route::post('admin/admincity','admin/addcity@addcity');


// Route::get('admin/form',function(){
//     return view('admin/form');
// });

// Route::get('admin/index',function(){
//     return view('admin/index');
// });


// Admin Login

// Route::get('login', 'AuthController@index');
// Route::post('post-login', 'AuthController@postLogin');
// Route::get('registration', 'AuthController@registration');
// Route::post('post-registration', 'AuthController@postRegistration');
// Route::get('dashboard', 'AuthController@dashboard');
// Route::get('logout', 'AuthController@logout');

 Auth::routes();

 Route::get('/', 'Auth\LoginController@login');

Route::group(array('middleware' => 'auth'), function(){


    Route::get('admin/dashboard',function(){
        return view('admin/dashboard');
    });


            Route::resource('admin/user','admin\User');

            // Route::post('admin/adminform','admin\useradd@add');


            Route::resource('admin/parking','admin\Parking');

            // Route::post('admin/parkingform','admin\parkingform@addparking');


            Route::resource('admin/area','admin\Addarea');

            //Route::post('admin/addareaform','admin\addareaform@areaadd');


            Route::resource('admin/country','admin\Country');

            // Route::post('admin/admincountry','admin\addcountry@addcoun');


            Route::resource('admin/state','admin\State');

            // Route::post('admin/adminstate','admin\addstate@addstat');


            Route::resource('admin/city','admin\City');


});
