<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-pink-100 via-rose-200 to-purple-200 min-h-screen flex items-center justify-center font-sans">

    {{-- Contenido dinámico de cada vista --}}
    @yield('content')

</body>
</html>
