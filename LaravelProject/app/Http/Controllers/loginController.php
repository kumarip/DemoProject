<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class loginController extends Controller
{
      /**
    * Fetching All User Data
    * @return = string(userData)
    **/
    public function getUserNames() {
        $userData = Test::all();
        //dd($userData);
        return view('hello', ['userData' => $userData]);
    }
