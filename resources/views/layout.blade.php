<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Gestión Escolar')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <a href="/inicio" class="btn">🏠 Inicio</a>
        @yield('content')
    </div>
</body>
</html>
