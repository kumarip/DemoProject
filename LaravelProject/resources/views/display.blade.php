@extends('master')

@section('title')
    display User Details
@endsection

@section('header')
    
    <script type="text/javascript" src="{{URL::asset('asset/js/userOperation.js')}}"></script>  

@section('content')
    <div class="table-responsive">
    <h1> My Profile </h1>
        <table class="table">
        @foreach($userData as $user)
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
        </table>
                <input type="button" class="btn btn-primary" value="Logout" onclick="logout();"></td>

    </div>
@endsection

@section('footer')

@endsection
 
