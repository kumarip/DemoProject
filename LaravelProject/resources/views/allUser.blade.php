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
    <h1> All User Profiles </h1>
    <div id="topCornerBtn">
      <input type="button" id="btn" class="btn btn-primary pull-right" value="Add New User" onclick="registerNewUser();">
      <input type="button" id="btn" class="btn btn-primary pull-right" value="My profile" onclick="home();">
      <div class="col-sm-3 col-md-3">
        <form class="navbar-form" role="search" action="">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="searchUser" id="searchUser">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit" onclick="searchUser();"><i class="glyphicon glyphicon-search"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
      <table class="table">
        <div>
          <tr>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Action</th>
          </tr>
          @foreach ($userData as $user)
            <tr>
              <td>{{$user->firstName}}</td>
              <td>{{$user->lastName}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->gender}}</td>
              <td>{{$user->address}}</td>
              <td><input type="button" class="btn btn-primary" value="Edit" id="editUserDetail" onclick="editUserDetail({{$user->userId}});">
                <input type="button" class="btn btn-primary" value="Delete" id="deleteUserDetail" onclick="deleteUserDetail({{$user->userId}});"></td>         
            </tr>
          @endforeach
        </div>
      </table> 
    </div>
@stop

        
