@extends('layouts.default')

@section('title', 'Home')

@section('content')
    @include('layouts.navbar')

    <style>
        #opcoes {
            position: relative;
        }

        #nao {
            position: absolute;
        }
    </style>
    <style>
        .neumorphism-container {
            background: #200e2c;
            border-radius: 20px;
            padding: 20px;
            box-shadow: -4px -4px 8px rgba(0, 0, 0, 0.1), 4px 4px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
    <style>
        .image-container {
            position: relative;
        }

        .image-hover {
            transition: transform 0.3s ease-in-out;
        }

        .image-hover:hover {
            transform: translateY(-5px);
        }

        .btn-saiba-mais {
            transition: opacity 0.3s ease-in-out;
            border: 1px solid white;
        }

        .image-container:hover .btn-saiba-mais {
            opacity: 1;
        }
    </style>
    <style>
        .contact-button {
            border: 1px solid white;
        }
    </style>

    <div class="container mx-auto mt-20 text-center">

        <div id="profile" class="mb-6">
            <img src="{{ asset('images/isa.jpeg') }}" alt="Sua Foto"
                class="rounded-full w-60 h-60 shadow-lg mx-auto mb-4 mt-8">
            <h2 class="text-xl font-bold mb-2">Isabella Conti</h2>
            <p class="text-gray-300">Olá. Sou a Isabella Conti, Mestre Nacional de Xadrez :)</p>
            <p class="text-gray-300">Campeã Brasileira Universitária de Xadrez.</p>
        </div>

        <div class="flex justify-center space-x-4 mt-8 pb-12">
            <a href="#courses"
                class="neumorphism bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg">Cursos</a>
            <a href="#contact"
                class="neumorphism contact-button bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg">Contato</a>
        </div>

    </div>

    <div id="brincadeira" class="mt-8">
        <div id="opcoes" class="flex mt-2 relative">
            <img id="nao" src="{{ asset('images/rei.png') }}" onmouseover="moverNao()"
                class="cursor-pointer w-58 h-48">
        </div>
    </div>

    <div id="background" class="mb-16">
        <img src="images/xadez.png" alt="Imagem de fundo" />
    </div>

    <div id="courses" class="neumorphism-container w-full md:w-3/4 mx-auto mb-12 p-12 mt-12">
        <h2 class="text-3xl font-bold mb-4 text-white-400 text-center mb-8">Cursos Disponíveis</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="bg-[#311843] rounded-lg shadow-neumorphism p-6">
                <h3 class="text-xl font-bold mb-2 text-purple-400">Xadrez Vitorioso - Estratégias</h3>
                <div class="image-container relative">
                    <img src="images/xadrezvitorioso.png" alt="Imagem do Curso 1"
                        class="mx-auto mb-4 w-54 h-78 image-hover">
                    <p class="text-gray-600 mb-8">Estratégia.</p>
                    <div class="text-center">
                        <button
                            class="btn-saiba-mais neumorphism bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg">Saiba
                            mais</button>
                    </div>
                </div>
            </div>
            <div class="bg-[#311843] rounded-lg shadow-neumorphism p-6">
                <h3 class="text-xl font-bold mb-2 text-purple-400">Gambito da Dama Aceito</h3>
                <div class="image-container relative">
                    <img src="images/GAMBITODADAMA.png" alt="Imagem do Curso 1" class="mx-auto mb-4 w-54 h-78 image-hover">
                    <p class="text-gray-600 mb-8">Abertura.</p>
                    <div class="text-center">
                        <button
                            class="btn-saiba-mais neumorphism bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg">Saiba
                            mais</button>
                    </div>
                </div>
            </div>
            <div class="bg-[#311843] rounded-lg shadow-neumorphism p-6">
                <h3 class="text-xl font-bold mb-2 text-purple-400">5 Segredos para evoluir no Xadrez</h3>
                <div class="image-container relative">
                    <img src="images/5segredos.png" alt="Imagem do Curso 1" class="mx-auto mb-4 w-54 h-78 image-hover">
                    <p class="text-gray-600 mb-8">Estratégia.</p>
                    <div class="text-center">
                        <button
                            class="btn-saiba-mais neumorphism bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg">Saiba
                            mais</button>
                    </div>
                </div>
            </div>
            <div class="bg-[#311843] rounded-lg shadow-neumorphism p-6">
                <h3 class="text-xl font-bold mb-2 text-purple-400">Aulas Particulares - Com MN Conti</h3>
                <div class="image-container relative">
                    <img src="images/particular.png" alt="Imagem do Curso 1" class="mx-auto mb-4 w-54 h-78 image-hover">
                    <p class="text-gray-600 mb-8">Estratégia.</p>
                    <div class="text-center">
                        <button
                            class="btn-saiba-mais neumorphism bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg">Saiba
                            mais</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="container mx-auto mt-8 mb-12">
        <div class="neumorphism-container rounded-lg shadow-lg p-8 mx-auto max-w-md">
            <h2 class="text-white text-2xl font-bold mb-4">Entre em Contato</h2>
            <form action="/submit" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="text-white block mb-2">Seu Nome</label>
                    <input type="text" name="name" id="name" placeholder="Seu Nome"
                        class="w-full px-4 py-2 rounded-lg shadow-sm neumorphism-container text-white focus:outline-none focus:bg-purple-800">
                </div>
                <div class="mb-4">
                    <label for="email" class="text-white block mb-2">Seu E-mail</label>
                    <input type="email" name="email" id="email" placeholder="Seu E-mail"
                        class="w-full px-4 py-2 rounded-lg shadow-sm neumorphism-container text-white focus:outline-none focus:bg-purple-800">
                </div>
                <div class="mb-4">
                    <label for="message" class="text-white block mb-2">Sua Mensagem</label>
                    <textarea name="message" id="message" rows="4" placeholder="Sua Mensagem"
                        class="w-full px-4 py-2 rounded-lg shadow-sm neumorphism-container text-white focus:outline-none focus:bg-purple-800"></textarea>
                </div>
                <button type="submit"
                    class="neumorphism bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg">Enviar
                    Mensagem</button>
            </form>
        </div>
    </div>

    <footer class="neumorphism-container bg-gray-900 py-12">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="neumorphism-container p-6 rounded-lg">
                    <h3 class="text-lg font-bold mb-4 text-white">Menu</h3>
                    <ul class="list-none">
                        <li><a href="#" class="text-gray-300 hover:text-white transition duration-300">Home</a></li>
                        <li><a href="#courses" class="text-gray-300 hover:text-white transition duration-300">Cursos</a>
                        </li>
                        <li><a href="#contact" class="text-gray-300 hover:text-white transition duration-300">Contato</a>
                        </li>
                    </ul>
                </div>
                <div class="neumorphism-container p-6 rounded-lg">
                    <h3 class="text-lg font-bold mb-4 text-white">Informações de Contato</h3>
                    <p class="text-gray-300">Telefone: (48) 988418877</p>
                    <p class="text-gray-300">Email: ircontif@gmail.com</p>
                </div>
                <div class="neumorphism-container p-6 rounded-lg">
                    <h3 class="text-lg font-bold mb-4 text-white">Siga-nos</h3>
                    <ul class="list-none">
                        <li><a href="#" class="text-gray-300 hover:text-white transition duration-300">Youtube</a>
                        </li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition duration-300">Instagram</a>
                        </li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition duration-300">Chess.com</a>
                        </li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition duration-300">Lichess</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function moverNao() {
            var naoButton = document.getElementById('nao');

            naoButton.style.position = 'absolute';
            naoButton.style.left = Math.random() * (window.innerWidth - naoButton.clientWidth) + 'px';
        }
    </script>
@endsection
