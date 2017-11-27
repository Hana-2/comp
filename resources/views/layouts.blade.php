<!doctype html>
<html lang="en">

<head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

@include ('Partials._bootstrapCSS')
    
</head>
  
<body>

@include('Partials._nav')
<br>
<br>

@yield('content')

<br>
<br>
   
@include('Partials._script')
    
</body>

</html>