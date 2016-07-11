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
Route::post('/login','UserController@displayUserDetail');
Route::get('/login/manageAllUser', 'UserController@getAllUser');
Route::get('/login/currentUser/edit/{userId}','UserController@editCurrentUserDetail');
Route::get('/login/edit/{userId}','UserController@editUserDetail');
Route::get('/login/currentUser/delete/{userId}','UserController@deleteCurrentUserDetail');
Route::get('/login/delete/{userId}','UserController@deleteUserDetail');
Route::post('/login/currentUser/update','UserController@updateCurrentUserDetail');
Route::post('/login/update','UserController@updateUserDetail');
Route::get('/login/new','UserController@registerNewUser');
Route::post('/login/new/add','UserController@addNewUserDetail');
Route::get('/login/home','UserController@home');
Route::get('/upload','UserController@uploadPic');
Route::post('/login/user/search','UserController@searchUser');
Route::get('/logout','UserController@logout');