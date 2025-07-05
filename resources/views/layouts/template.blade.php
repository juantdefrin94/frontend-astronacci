<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{ csrf_token() }}" name="csrf-token">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/iroly-fishing-circle.png') }}">
    <title>@yield('title')</title>

    @include('layouts.style')

    @stack('styles')

</head>
<body>
    @include('layouts.header')

    @include('layouts.script')

    @yield('main-page-content')
    
    @include('layouts.footer')

    @stack('scripts')
</body>
</html>