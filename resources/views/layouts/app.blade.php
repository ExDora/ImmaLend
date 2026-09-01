<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Poppins', ui-sans-serif, system-ui, sans-serif;
        }
    </style>
</head>
<body class="min-h-screen flex">
    <!-- Sidebar Start -->
    @include('layouts.partials.sidebar')
    <!-- Sidebar End -->

    <!-- Content Start -->
    <main class="flex-1 min-w-0">

        <!-- Header Start -->
        @include('layouts.partials.header')
        <!-- Header End -->

        @yield('content')
    </main>
    <!-- Content End -->
</body>
</html>