<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Creative-Z' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="cz-body">
    @include('components.navbar')

    <main class="cz-main">
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>