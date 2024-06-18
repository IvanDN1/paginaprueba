<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Page Content-->
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('js/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="/images/IconATE.png">
    <title>{{ $title ?? 'TmCorporación' }}</title>
</head>
<body>
@include('components.navbar')
@include('components.header')
<section class="row bg-gradient-primary-to-secondary6 text-white py-3">
</section>
<section class="row bg-gradient-primary-to-secondary3 py-2">
    <div class="container px-5 my-5">
        <div class="text-center">
            <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="https://tmcapacitacion.cl/cursos"><Table><h3 class="h3">Conoce Nuestra OTEC</h3>TM-CAPACITACIÓN</Table></a>
        </div>
    </div>
</section>
<section class="row bg-gradient-primary-to-secondary6 text-white py-3">
</section>
    @yield('content')
<section class="row bg-gradient-primary-to-secondary6 text-white py-3">
</section>
@include('components.footer')
</body>
</html>


