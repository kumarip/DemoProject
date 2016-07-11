@extends('master')

@section('title')
    display User Details
@endsection

@section('header')
    <script type="text/css" src="{{URL::asset('asset/css/design.css')}}"></script> 
    <script type="text/javascript" src="{{URL::asset('asset/js/userOperation.js')}}"></script>   
@endsection        

@section('content')
    <div class="table-responsive">
    <div>
      <h1> My Profile </h1>
      <div>
      <input type="button"  class="btn btn-primary pull-right" value="Logout" onclick="logout();">
      <input type="button"  class="btn btn-primary pull-right" value="ManageUser" onclick="allUser();">
      </div>
    </div>
    <div>
        </br>
        <hr>
    </div>
        <table class = "table-user-information">
          <h1>
            <tr>
              <tr><td>Profile Pic </td>
                <td><img src="{{ URL::to('/') }}/profilePics/{{$userData->firstName}}.jpg" alt="Profile Pic" width="100" height="100"></td>
              </tr>
              <tr><td>First Name : </td>
                <td>{{$userData->firstName}}</td>
              </tr>
              <tr><td>Last Name : </td>
                <td>{{$userData->lastName}}</td>
              </tr>
              <tr><td>Email Name : </td>
                <td>{{$userData->email}}</td>
              </tr>
              <tr><td>Gender : </td>
                <td>{{$userData->gender}}</td>
              </tr>
              <tr><td>Address : </td>
                <td>{{$userData->address}}</td>
              </tr>
              <tr> 
                <td>
                <input type="button" class="btn btn-primary" value="Edit" id="editCurrentUserDetail" onclick="editCurrentUserDetail({{$userData->userId}});">
                <input type="button" class="btn btn-primary" value="Delete" id="deleteUserDetail" onclick="deleteCurrentUserDetail({{$userData->userId}});">
                </td>         
              </tr>        
            </tr>
          </h1>
        </table>
               

    </div>
@endsection

@section('footer')

@endsection
