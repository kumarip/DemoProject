<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('hello');
});
*/
Route::get('/user/profile', [
    'as' => 'userName', 'uses' => 'loginController@getUserNames'
]);
Route::get('/', 'UserController@getUserLogin');
Route::post('/login','UserController@checkValidate');
Route::get('/login/display/des','UserController@getUserDetail');

