<?php
/**
 *  User controller file
 *  Created by : Kumari Pallavi
 *  Date : 28/06/2016
 **/
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
     * @param object $request Request object
     * @return null
     **/
     public function checkValidate(Request $request) {
        //$email = $this->validateData($request->email);
        //$password = $this->validateData($request->password);
        $userData = Test::where('email',$request->email)
                         ->where('password',$request->password)
                         ->get();
        //dd($userData);
        $user = $userData;
        foreach($userData as $userData) {
            //dd($userData->userId);
            $userId = $userData->userId;
            //$id = session('userId');
            //session(['userId' => 'id']);
        }
        if(count($user)) { 
            return view('display', ['userData' => $user]);   
        }
        else {
            return redirect('/');
        }    
    }
    
    
    /**
     * Edit User Data
     * @return = null
     **/ 
    public function editUserDetail($userId) {
        $userData = Test::where('userId', $userId)->get();
        //dd($userData); 
        return view('editUser', compact('userData'));
    }
    
    
    /**
     * Delete User
     * @param $uerId(number)
     * @return = null
     **/
    public function deleteUserDetail($userId) {
        //dd($userId);
        $user = Test::find($userId);
        //dd($user);
        $user->delete();
        return redirect('/');
    }
    
    
    /**
     * Delete User
     * @param $uerId(number)
     * @return = null
     **/
    public function updateUserDetail($userId) {
        //dd($userId);
        $user = Test::find($userId);
    

        return view('display');
    }
    
    
    /**
     *  Validate input data
     *  @param = string
     *  @return = $data(string)
     **/
    public function validateData($data) {
       //$data = trim($data);
       // return back();
      }
    
}