<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
</head>
<body>
    @yield('content')
    <script src="{{asset('bootstrap/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
