@extends('master')

@section('title')
    display User Details
@endsection

@section('header')
    <link rel="stylesheet" type="text/css" href="asset/bootstrap-3.3.6-dist/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
@endsection

@section('content')
    <div>
    <h1> My Profile </h1>
        <table class="table">
        @foreach($userData as $user)
            <tr>
                <td>{{$user->firstName}}</td>
                <td>{{$user->lastName}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->address}}</td>
                <td><input type="button" class="btn btn-primary" value="Edit">/
                <input type="button" class="btn btn-primary" value="Delete"></td>
            </tr>      
        @endforeach
        </table>
    </div>
@endsection

@section('footer')
    <script src="asset/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
@endsection
 
