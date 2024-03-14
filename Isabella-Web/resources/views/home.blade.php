@extends('layouts.default')

@section('title', 'Home')

@section('content')
    @include('layouts.navbar')

    <div class="container mx-auto mt-20 text-center">

        <div id="profile" class="mb-6">
            <img src="{{ asset('images/isa.jpeg') }}" alt="Sua Foto" class="rounded-full w-60 h-60 shadow-lg mx-auto mb-4">
            <h2 class="text-xl font-bold mb-2">Isabella Conti</h2>
            <p class="text-gray-600">Legenda sobre você ou alguma descrição breve.</p>
            <p class="text-gray-600">Legenda sobre você ou alguma descrição breve.</p>
        </div>

        <div class="flex justify-center space-x-4 mt-8">
            <a href="{{ route('home') }}" class="neumorphism bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg">Contato</a>
            <a href="{{ route('home') }}" class="neumorphism bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg">Outra Sessão</a>
        </div>

        <div id="brincadeira" class="mt-8">
            <div id="opcoes" class="flex mt-2 relative">
                <img id="nao" src="{{ asset('images/rei.png') }}" onmouseover="moverNao()"
                    class="cursor-pointer w-54 h-48">
            </div>
        </div>
    </div>

    <div id="courses" class="w-full md:w-3/4 mx-auto mb-12">
        <h2 class="text-3xl font-bold mb-4 text-purple-400">Cursos Disponíveis</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="bg-white rounded-lg shadow-neumorphism p-6">
                <h3 class="text-xl font-bold mb-2 text-purple-400">Curso 1</h3>
                <p class="text-gray-600">Descrição do Curso 1.</p>
            </div>
            <div class="bg-white rounded-lg shadow-neumorphism p-6">
                <h3 class="text-xl font-bold mb-2 text-purple-400">Curso 2</h3>
                <p class="text-gray-600">Descrição do Curso 2.</p>
            </div>
            <div class="bg-white rounded-lg shadow-neumorphism p-6">
                <h3 class="text-xl font-bold mb-2 text-purple-400">Curso 3</h3>
                <p class="text-gray-600">Descrição do Curso 3.</p>
            </div>
            <div class="bg-white rounded-lg shadow-neumorphism p-6">
                <h3 class="text-xl font-bold mb-2 text-purple-400">Curso 4</h3>
                <p class="text-gray-600">Descrição do Curso 4.</p>
            </div>
        </div>
    </div>>




    <script>
        function moverNao() {
            var naoButton = document.getElementById('nao');
            var fraseRei = document.getElementById('fraseRei');

            naoButton.style.position = 'absolute';
            naoButton.style.left = Math.random() * (window.innerWidth - naoButton.clientWidth) + 'px';
            naoButton.style.top = Math.random() * (window.innerHeight - naoButton.clientHeight) + 'px';
        }
    </script>
@endsection
