<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('asset/bootstrap-3.3.6-dist/css/bootstrap.min.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{URL::asset('asset/js/jquery-1.12.4.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('asset/bootstrap-3.3.6-dist/js/bootstrap.min.js')}}"></script>
    @yield('header')
  </head>
<body>
  <div class="container">  
    @yield('content')
  </div>
  @yield('footer')
</body>    
</html>