@extends('master')

@section('title')
    display User Details
@endsection

@section('header')
    <script type="text/javascript" src="{{URL::asset('asset/js/userOperation.js')}}"></script>
@endsection        

@section('content')
    <div class="table-responsive">
    <h1> My Profile </h1>
        <table class="table">
            <tr>
                <td>{{$userData->firstName}}</td>
                <td>{{$userData->lastName}}</td>
                <td>{{$userData->email}}</td>
                <td>{{$userData->gender}}</td>
                <td>{{$userData->address}}</td>
                <td><input type="button" class="btn btn-primary" value="Edit" id="editUserDetail" onclick="editUserDetail({{$userData->userId}});">
                <input type="button" class="btn btn-primary" value="Delete" id="deleteUserDetail" onclick="deleteUserDetail({{$userData->userId}});"></td>         
            </tr>
        </table>
                <input type="button" class="btn btn-primary" value="Logout" onclick="logout();"></td>

    </div>
@endsection

@section('footer')

@endsection
 
