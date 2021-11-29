<!doctype html>
<html lang="en" id="awal">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('datepicker/jquery-ui.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/laravel.png') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">

    <title>Ardent Auto Detailing</title>
</head>

<body>

    @include('components.navbar')

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">

    </script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="{{ asset('js/fancybox.js') }}"></script>
    <script src="{{ asset('js/accordion.js') }}"></script>
    <script src="{{ asset('js/scroll-button.js') }}"></script>
    <script src="{{ asset('js/myscript.js') }}"></script>
    <script src="{{ asset('datepicker/external/jquery/jquery.js') }}"></script>
    <script src="{{ asset('datepicker/jquery-ui.js') }}"></script>

</body>

</html>