<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ISDEA</title>
    <link rel="shortcut icon" type="image/x-icon" href="/storage/images/favicon.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css"/>
    <link href="https://fonts.googleapis.com/css?family=Anton|Raleway" rel="stylesheet">
</head>
@if (Request::is(LaravelLocalization::getCurrentLocale() . '/login'))
<body class="background mb-0">
<div class="container">
    @include('layouts.flash-message')
    @yield('content')
</div>
</body>
@else
<body class="mb-0">
<div class="container">
    @include('layouts.flash-message')
    @yield('content')
</div>
</body>
@endif
{{--<body>--}}
{{--@include('layouts.flash-message')--}}
{{--@section('background')--}}
{{--@show--}}
    {{--<div class="container">--}}
    {{--@yield('content')--}}
    {{--</div>--}}
{{--</body>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="{{ asset('/js/app.js') }}"></script>
</html>