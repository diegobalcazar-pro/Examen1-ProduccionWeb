<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Tienda Urbana' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand" href="/">
            Tienda Urbana
        </a>

        <div>

            <a class="nav-link d-inline text-white" href="/">
                Home
            </a>

            <a class="nav-link d-inline text-white" href="/productos">
                Productos
            </a>

            <a class="nav-link d-inline text-white" href="/noticias">
                Noticias
            </a>

            <a class="nav-link d-inline text-white" href="/quienessomos">
                Quiénes Somos
            </a>

        </div>

    </div>

</nav>

<main class="container py-5">

    {{ $slot }}

</main>

<footer class="bg-dark text-white text-center py-4">

    <p class="mb-0">
        © 2026 Tienda Urbana - Todos los derechos reservados
    </p>

</footer>

</body>

</html>