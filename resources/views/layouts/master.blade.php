<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        @include('navbar')
    </header>
    
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center mt-4">
        <p>&copy; 2024 My Laravel App</p>
    </footer>
</body>
</html>