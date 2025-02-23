<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Error')</title>

    <!-- Vite CSS -->
    @vite(['resources/css/App.css'])
</head>
<body>
    <div class="container text-center mt-5">
        @yield('content')
    </div>
</body>
</html>
