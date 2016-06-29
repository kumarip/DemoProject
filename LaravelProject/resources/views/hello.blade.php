<html>
<head>
  <title>Hello World</title>    
</head>
<body>
    <div>
        <div>
               @foreach ($userData as $user)
                 {!! $user !!}
               @endforeach

        </div>
    </div>
</body>
</html>