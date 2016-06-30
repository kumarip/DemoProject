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
Route::get('/user/profile', [
    'as' => 'userName', 'uses' => 'loginController@getUserNames'
]);
Route::get('/', 'UserController@getUserLogin');
Route::post('/login','UserController@checkValidate');
Route::get('/login/edit/{userId}','UserController@editUserDetail');
Route::get('/login/delete/{userId}','UserController@deleteUserDetail');
Route::get('/login/update/{userId}','UserController@updateUserDetail');
