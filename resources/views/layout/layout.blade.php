
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/nosotros.css') }}" rel="stylesheet">

    <title>{{ $title ?? 'Mi Sitio Web' }}</title>
</head>
<body>
    @include('layout.navbar')
        <div>
            @include('layout.header')
                <div class="container">
                    @yield('content')
                </div>
        </div>
    @include('layout.footer')
</body>
</html>


