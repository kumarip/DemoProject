<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    @yield('header')
  </head>
<body>
  <div class="container">  
    @yield('content')
  </div>
  @yield('footer')
</body>    
</html>