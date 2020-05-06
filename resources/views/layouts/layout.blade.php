<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('titolo')</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        {{-- @yield('css') --}}
    </head>
    <body>
        @include('partials.header')
        <main>
            @yield('mainContent')
        </main>
        @include('partials.footer')
        @yield('scripts')
    </body>
    {{-- //scripts --}}
</html>
