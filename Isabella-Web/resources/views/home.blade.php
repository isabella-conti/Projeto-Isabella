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
            <img src="{{ asset('images/isa.jpeg') }}" alt="Sua Foto" class="rounded-full w-60 h-60 shadow-lg mx-auto mb-4 mt-8">
            <h2 class="text-xl font-bold mb-2">Isabella Conti</h2>
            <p class="text-gray-600">Legenda sobre você ou alguma descrição breve.</p>
            <p class="text-gray-600">Legenda sobre você ou alguma descrição breve.</p>
        </div>

        <div class="flex justify-center space-x-4 mt-8 pb-12">
            <a href="{{ route('home') }}"
                class="neumorphism bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg">Cursos</a>
            <a href="{{ route('home') }}"
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

    <div class="neumorphism-container w-full md:w-3/4 mx-auto mb-12 p-12 mt-12">
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
                    <img src="images/GAMBITODADAMA.png" alt="Imagem do Curso 1"
                        class="mx-auto mb-4 w-54 h-78 image-hover">
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
                    <img src="images/5segredos.png" alt="Imagem do Curso 1"
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
                <h3 class="text-xl font-bold mb-2 text-purple-400">Aulas Particulares - Com MN Conti</h3>
                <div class="image-container relative">
                    <img src="images/particular.png" alt="Imagem do Curso 1"
                        class="mx-auto mb-4 w-54 h-78 image-hover">
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

    <script>
        function moverNao() {
            var naoButton = document.getElementById('nao');

            naoButton.style.position = 'absolute';
            naoButton.style.left = Math.random() * (window.innerWidth - naoButton.clientWidth) + 'px';
        }
    </script>
@endsection
