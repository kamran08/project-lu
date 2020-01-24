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
Route::get('/app/getProject', 'HomeController@getProject');
Route::get('/app/getProject/{key}', 'HomeController@getProjectById');

// 
Route::post('/app/addTeamMember', 'TeamController@addTeamMember');
Route::get('/app/getTeamMembers', 'TeamController@getTeamMembers');
Route::post('/app/editTeamMemeber', 'TeamController@editTeamMemeber');
Route::post('/app/editUser', 'TeamController@editUser');
Route::post('/app/changePassword', 'TeamController@changePassword');

// send request 
Route::get('/app/getallCategory', 'HomeController@getallCategory');
Route::get('/app/getProjectFull', 'HomeController@getProjectFull');
Route::post('/app/deleteRequest', 'ReviewController@deleteRequest');
Route::post('/app/storeRequest', 'ReviewController@storeRequest');
Route::get('/app/getallrequest', 'ReviewController@getallrequest');
Route::post('/app/storeReview', 'ReviewController@storeReview');
Route::post('/app/deleteReview', 'ReviewController@deleteReview');






//logout
Route::get('/logout', function () {
    Auth::logout();
    Session::flush();
    return redirect("/");
});


Route::any('{slug}', 'HomeController@home')->where('slug', '([A-z\d-\/_.]+)?');
