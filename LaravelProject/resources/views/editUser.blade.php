@extends('master')

@section('title')
    Edit User Page
@endsection

@section('header')
  <script type="text/javascript" src="{{URL::asset('asset/js/userOperation.js')}}"></script>

@section('content')
  @foreach($userData as $user)
    <form name = "editForm" action = "{{url('/login/update')}}" method="post">
      <div class="form-group row">
      <h1>Edit Your Details</h1>
        <div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type = "hidden" name = "editId" id= "editId" value="{{$user->userId}}">
        </div>
        <div>
          <label for = "firstName" class = "col-sm-3 form-control-label">First Name</label>
          <input type = "text" name = "firstName" class = "form-control" id = "firstName" value="{{$user->firstName}}" ></br>  
        </div>
        <div>
          <label for = "lastName" class = "col-sm-3 form-control-label">Last Name</label>
          <input type = "text" name = "lastName" class = "form-control" id = "lastName" value="{{$user->lastName}}" ></br>
        </div>
        <div>
          <label for = "email" class = "col-sm-3 form-control-label">Email</label>
          <input type = "text" name = "email" class = "form-control" id = "email" value="{{$user->email}}" ></br>  
        </div>
        <div>
          <label for = "gender" class = "col-sm-3 form-control-label">Gender</label>
          <input type = "text" name = "gender" class = "form-control" id = "gender" value="{{$user->gender}}" ></br>
        </div>
        <div>
          <label for = "address" class = "col-sm-3 form-control-label">Address</label>
          <input type = "text" name = "address" class = "form-control" id = "address" value="{{$user->address}}" ></br>
        </div>
        <input type="submit" class="btn btn-primary" value="Update" ></td>
      </div>
    </form>
  @endforeach
@endsection    