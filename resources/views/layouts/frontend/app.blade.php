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
<style>
    .image-container {
        position: relative;
        width: 100%;
        padding-top: 70%;
        /* 4:3 aspect ratio (can adjust as needed) */
        overflow: hidden;
    }

    .image-container img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Ensures the image covers the container */
        object-position: center;
        /* Centers the image within the container */
    }
</style>


</html>
