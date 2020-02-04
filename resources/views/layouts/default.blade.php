<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> 
    <title>Laracarte</title>
    <style>
        body{
            font-family: 'Open Sans', Helvetica, Arial, 'sans-serif';
        }
        footer{
            margin: 1em 0;
        }
    </style>
</head>
<body>
    @include('layouts.partials._nav')
    <div class="container">
        @yield('content')
    </div>
       
    @include('layouts.partials._footer')
    
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html> 