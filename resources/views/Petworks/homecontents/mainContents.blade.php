<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Petworks</title>
    @yield('page-level-css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.1.1-web/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="icon" href="{{ asset('images/petworks.png') }}">
</head>

<body>
    @include('Petworks.homecontents.layouts.navbar')
    @yield('contents')

    <script src="{{ asset('js/script.js')}}"></script>
</body>

</html>
