<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-gray-800 p-4 fixed top-0 w-full z-10 shadow-lg">
        <div class="container mx-auto flex justify-end">
            <a href="#home" class="text-purple-400 hover:text-white mr-4">Sobre Mim</a>
            <a href="#courses" class="text-purple-400 hover:text-white mr-4">Cursos</a>
        </div>
    </nav>


    @yield('content')

</body>
</html>
