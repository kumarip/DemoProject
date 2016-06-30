@extends('master')

@section('title')
    Edit User Page
@endsection

@section('content')
    <form action = "{{url('/login')}}">
      <div class="form-group row">
        
        @foreach($userData as $user)
            <label for = "email" class = "col-sm-2 form-control-label">Email</label>
            <input type = "text" name = "email" class = "form-control" id = "email" value="{{$user->email}}" ></br></br>
            
        @endforeach
        <input type="button" class="btn btn-primary" value="Update"></td>
      </div>
    </form>
@endsection    