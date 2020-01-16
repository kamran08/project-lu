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

Route::post('/app/registration', "UserController@registration");
Route::post('/app/login', "UserController@login");
Route::post('/app/upload', "UserController@uploadImages");
Route::post('/uploadImages', 'UserController@getImage');

// project route
Route::post('/app/uploadPorject', 'HomeController@uploadPorject');
Route::post('/app/addTeamMember', 'HomeController@addTeamMember');


//logout
Route::get('/logout', function () {
    Auth::logout();
    Session::flush();
    return redirect("/");
});


Route::any('{slug}', 'HomeController@home')->where('slug', '([A-z\d-\/_.]+)?');
