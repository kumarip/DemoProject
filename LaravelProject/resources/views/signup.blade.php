@extends('master')

@section('title')
    signup
@endsection

@section('content')
    <h1>Add your Details</h1>
    <form action="{{url('/login/new/add')}}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="table-responsive">
        <div class="form-group">
          <table class="table">
            <tr>
              <td> First Name  </td>
              <td>
                <input type="text" name="firstname" id="firstname">
                <span id="fname"></span>
              </td>
            </tr>
            <tr>
              <td> Last Name </td>
              <td>
                <input type="text" name="lastname" id="lastname">
                <span id="lname"></span>
              </td>
            </tr>
            <tr>
              <td> Email ID </td>
              <td>
                <input type="text" name="email" id="email">
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
                <td> Address </td>
                <td>
                  <textarea rows="4" cols="20" id="add"></textarea>
                  <span id="addr"></span>
                </td>
            </tr>
            <tr>
              <td colspan="2">
              <input type="submit" id="addDetails" class="btn btn-primary" value="Submit">
              </td>
            </tr>
          </table>
        </div>
      </div>
    </form>
@endsection