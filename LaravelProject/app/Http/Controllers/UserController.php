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
    * Fetching All User Data
    * @return = string(userData)
    **/
    public function getAllUser() {
        $userData = Test::all();
        return view('allUser', ['userData' => $userData]);
    }
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
    public function addNewUserDetail(Request $request) {
        $user = new Test;
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->profilePic = $request->profilePic;
        $user->save();
        //dd($user);
        $this->uploadPic($request);
        $userData = Test::all();
        return view('allUser', ['userData' => $userData]);
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
     public function displayUserDetail(Request $request) {
        //$email = $this->validateData($request->email);
        //$password = $this->validateData($request->password);
        $userData = Test::where('email',$request->email)
                         ->where('password',$request->password)
                         ->get();
        $user = $userData;
        if(count($user)) {
            foreach($userData as $userData) {
                $userId = $userData->userId;
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
    
    public function home()
    {
        if(Session::has('sessionId')) {
            $userId = Session::get('sessionId');
            $userData = Test::find($userId);
            return view('display', ['userData' => $userData]);
        }    
    }
    /**
     * Edit Current User Data
     * @return = null
     **/ 
    public function editCurrentUserDetail($userId) {
        $userData = Test::where('userId', $userId)->get();
        //dd($userData);
        return view('editCurrentUser', compact('userData'));
    }
    /**
     * Edit All User Data
     * @return null
     * @param null
     **/
    public function editUserDetail($userId) {
        $userData = Test::where('userId', $userId)->get();
         //$userId = $userData->userId;
         //dd($userId);
        Session::setId($userId);
        Session::set('sessionEditId', $userId);
        Session::save();
        Session::get('sessionEditId');
        if(Session::has('sessionEditId')) {
        return view('editUser',['userData' => $userData]);
        }
    }
    
    /**
     * Delete Current User
     * @param $uerId(number)
     * @return = null
     **/
    public function deleteCurrentUserDetail($userId) {
        $user = Test::find($userId);
        $user->delete();
        return view('login');
    }
     /**
     * Delete User
     * @param $userId(number)
     * @return = null
     **/
    public function deleteUserDetail($userId) {
        $user = Test::find($userId);
        $user->delete();
        return redirect('/login/manageAllUser');
    }
    /**
     * Update Current User Details
     * @param 
     * @return = null
     **/
    public function updateCurrentUserDetail(Request $request) {
        if(Session::has('sessionId')) {
            $userId = Session::get('sessionId');
            $userData = Test::find($userId);
            $userData->firstName = $request->firstName;
            $userData->lastName = $request->lastName;
            $userData->email = $request->email;
            $userData->gender = $request->gender;
            $userData->address = $request->address;
            $userData->save();
            return view('display', ['userData' => $userData]);
        }
    }
    
    /**
     * Update User Details
     * @param 
     * @return = null
     **/
    public function updateUserDetail(Request $request) {
        if(Session::has('sessionEditId')) {
            $userId = Session::get('sessionEditId');
            //dd($userId);
            $userData = Test::find($userId);
            $userData->firstName = $request->firstName;
            $userData->lastName = $request->lastName;
            $userData->email = $request->email;
            $userData->gender = $request->gender;
            $userData->address = $request->address;
            $userData->save();
            $userData = Test::all();
            return view('allUser', ['userData' => $userData]);
        }
    }
    
    /**
     * upload profile picture
     * @param null
     * @param null
     **/
    public function uploadPic(Request $request) {
        $file = $request->file('profilePic');
        //dd($file);
        $destinationPath = base_path().'/public/profilePics'; // upload path
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $fileName = $request->firstName.'.'.$extension; // renameing image
        $file->move($destinationPath, $fileName);
        $userData = Test::all();       
        return view('allUser', ['userData' => $userData]);
        
    }
    /**
     * Search User
     * @param null
     * @return null
     **/
    public function searchUser() {
        
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