@extends('master')

@section('title')
    Login Page
@endsection

@section('header')
    <link rel="stylesheet" type="text/css" href="design.css">
@endsection

@section('content')
    <div class="container container-table"> 
    <div class="form-group vertical-center">
    <div class="text-center col-md-4 col-md-offset-4"> 
    <h2>Login User</h2></br>
        <form name="loginForm" action="{{url('/login')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="">
            <label for="email" class="col-sm-2 form-control-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="email"></br></br>
            <label for="password" class="col-sm-2 form-control-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password"></br></br>
            <div class="col-sm-offset-1 col-sm-10">
            <input type="submit" class="btn btn-primary" value="login" id="login" name="login">
            </div>
                    
        </form>
    </div>
    </div>
    </div>
@endsection

@section('footer')
    <script src="asset/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
@endsection
 
  