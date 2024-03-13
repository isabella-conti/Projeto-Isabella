<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    @vite('resources/css/app.css')

    <style>
        body {
            background-color: #2d2d2d;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #fff;
        }
    </style>
</head>
<body>

    @yield('content')

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>
