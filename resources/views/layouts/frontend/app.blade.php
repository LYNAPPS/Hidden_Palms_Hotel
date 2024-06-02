<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')

    @include('layouts.frontend.stylesheet')

</head>

<body>

    @include('layouts.frontend.navigation')
    @include('layouts.frontend.sidebar')

    @yield('main')
    @include('layouts.frontend.footer')
    @include('layouts.frontend.scripts')
</body>

</html>
