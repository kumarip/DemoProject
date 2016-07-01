<?php
/**
 *  User controller file
 *  Created by : Kumari Pallavi
 *  Date : 28/06/2016
 **/
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use App\Test;
use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class UserController extends Controller
{
    /**
     * Register New User
     * @param
     * @return
     **/
    public function registerNewUser() {
        return view('signup');
    }
    /**
     * Add New User
     * @param
     * @return
     **/ 
    public function addNewUser(Request $request) {
        $user = new Test;
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->save();
        dd($user);
        return view('display',compact(user));
        
    }
    /**
     * Display Login Page
     * @return null
     **/
    public function getUserLogin() {
        return view('login');
    }
    /**
     * Logout user
     * @param null
     * @return null
     **/
    public function logout() {
        Session::get('sessionId');
        Session::forget('sessionId');
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
        if(count($user)) {
            //dd($user);
            foreach($userData as $userData) {
                //dd($userData->userId);
                $userId = $userData->userId;
                //dd($userId);
                Session::setId($userId);
                Session::set('sessionId', $userId);
                Session::save();
                Session::get('sessionId');
            }    
            
            if(Session::has('sessionId')) {
                return view('display', ['userData' => $user[0]]);
            }
            else {
                return redirect('/');
            }
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
     * Update User Details
     * @param 
     * @return = null
     **/
    public function updateUserDetail(Request $request) {
        
        if(Session::has('sessionId')) {
            $userId = Session::get('sessionId');
            //dd($userId);
            $userData = Test::find($userId);
            $userData->firstName = $request->firstName;
            $userData->lastName = $request->lastName;
            $userData->email = $request->email;
            $userData->gender = $request->gender;
            $userData->address = $request->address;
            $userData->save();
            //dd($userData);
            return view('display', ['userData' => $userData]);
        }
    }
    
    
    /**
     * Validate input data
     * @param = string
     * @return = $data(string)
     **/
    function validateData() {
       //$data = trim($data);
       // return back();
    }
    

}