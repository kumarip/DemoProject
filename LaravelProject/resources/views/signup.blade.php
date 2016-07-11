@extends('master')

@section('title')
    signup
@endsection

@section('header')
  <script type="text/javascript" src="{{URL::asset('asset/js/userOperation.js')}}"></script>
@stop

@section('content')
    <h1>Add your Details</h1>
    <form action="{{url('/login/new/add')}}" enctype="multipart/form-data" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="table-responsive">
        <div class="form-group">
          <table class="table">
          <input type = "hidden" name = "UserId" id= "UserId" value="">
            <tr>
              <td> First Name </td>
              <td>
                <input type="text" name="firstName" id="firstName" placeholder="Firstname">
                <span id="fname"></span>
              </td>
            </tr>
            <tr>
              <td> Last Name </td>
              <td>
                <input type="text" name="lastName" id="lastName" placeholder="Lastname">
                <span id="lname"></span>
              </td>
            </tr>
            <tr>
              <td> Email ID </td>
              <td>
                <input type="text" name="email" id="email" placeholder="Email">
                <span id="eml"></span>
              </td>
            </tr>
            <tr>
              <td> Gender </td>
              <td>
                <input type="radio" id="male" name="gender" value="male">Male
                <input type="radio" id="female" name="gender"value="female">Female
                <span id="gen"></span>
              </td>
            </tr>
            <tr>
              <td> Password </td>
              <td>
                <input type="password" name="password" id="password" placeholder="Password">
                <span id="pass"></span>
                </td>
            </tr>
            <tr>
                <td> Address </td>
                <td>
                  <textarea rows="4" cols="20" id="address" name="address" placeholder="Address"></textarea>
                  <span id="addr"></span>
                </td>
            </tr>
            <tr>
                <td> Profile pic </td>
                <td>
                  <input type="file" name="profilePic" id="profilePic" accept="image/*"></br>
                </td>
            </tr>
            <tr>
              <td colspan="2">
              <input type="submit" id="addNewUserDetail" name="addNewUserDetail" class="btn btn-primary" value="Submit">
              </td>
            </tr>
          </table>
        </div>
      </div>
    </form>
@endsection