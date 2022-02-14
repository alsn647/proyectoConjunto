<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('scripts')
</head>
<body>
    <header>
        @include('partials.header')
    </header>
    @yield('cuerpo')
    <footer>
        @include('partials.footer')
    </footer>

</body>
</html>
