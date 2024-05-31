<!DOCTYPE html>
<html lang="en">
<head>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('js/migas.css') }}" rel="stylesheet">

    <title>{{ $title ?? 'Mi Sitio Web' }}</title>
</head>
<body>
@include('components.navbar')
<div class="container-fluid bg-gradient-primary-to-secondary2 border-">
    @include('components.header')

</div>
        @yield('content')
@include('components.footer')
</body>
</html>


