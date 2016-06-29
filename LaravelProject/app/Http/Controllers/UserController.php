<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use App\Test;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display Login Page
     * @return = null
     **/
    public function getUserLogin() {
        return view('login');
    }
    /**
     * Validate the login page
     * @param  Request  $request
     **/
     public function checkValidate(Request $request) {
        //$email = $this->validateData($request->email);
        //$password = $this->validateData($request->password);
        $userData = Test::where('email',$request->email)
        //->where('password',$request->password)
        ->get();
        //dd($userData);
        if(count($userData))
        {
            return view('/display', ['userData' => $userData]);
        
        }
        else {
            return redirect('/');
        }
        
    //getUserDetail();
    }
    /**
     * Fetching User Data
     * @return = null
     **/ 
    public function getUserDetail(Request $request) {
        $userData = Test::where('email',$request->email)
            ->where('password',$request->password)
            ->get();
        return view('display', compact('userData'));
    }
    /**
     *  Validate input data
     *  @param = string
     *  @return = $data(string)
     **/
    public function validateData($input) {
       
        
        $input = $this->Input('email');
        $input['email'] = trim($input['email']);
        $this->merge($input);
        return back();
      }
    
}