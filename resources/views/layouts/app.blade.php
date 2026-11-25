<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'Cooling Energy')
    </title>

    <meta
        name="description"
        content="@yield('description', 'Cooling Energy Ingeniería & Mantenimiento, especialistas en HVAC, aire acondicionado y protección contra incendios.')"
    >

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body>

    @include('components.header')

<main class="pt-20">
    @yield('content')
</main>

    @include('components.footer')

</body>
</html>
