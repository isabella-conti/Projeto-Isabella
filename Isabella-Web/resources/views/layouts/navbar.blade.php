<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Navegação Neumorfismo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .neumorphism {
            background: #200e2c;
            color: #f0f0f0;
            border-radius: 10px;
            padding: 10px 20px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 3px 3px 16px rgba(0, 0, 0, 0.5), -3px -3px 16px rgba(255, 255, 255, 0.1);
            border: none;
        }

        .neumorphism:hover {
            background: rgb(27, 1, 36);
            box-shadow: 6px 6px 16px rgba(0, 0, 0, 0.5), -6px -6px 16px rgba(255, 255, 255, 0.1);
            color: #fff;
            transform: translateY(-2px) scale(0.98);
        }


        .bg-navbar {
            background-color: #311843;
        }
    </style>
</head>

<body class="bg-gray-100">
    <nav class="bg-navbar p-4 fixed top-0 w-full z-10">
        <div class="container mx-auto flex justify-end items-center">
            <a href="#home" class="neumorphism text-gray-800 hover:text-white mr-4">Sobre mim</a>
            <a href="#courses" class="neumorphism text-gray-800 hover:text-white mr-4">Cursos</a>
            <a href="#contact" class="neumorphism text-gray-800 hover:text-white">Contato</a>
        </div>
    </nav>


    @yield('content')
</body>

</html>
