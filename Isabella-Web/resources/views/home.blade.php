@extends('layouts.default')

@section('title', 'Home')

@section('content')
    @include('layouts.navbar')

    <div class="container mx-auto mt-20 flex flex-col md:flex-row items-center">

        <div id="home" class="w-full md:w-1/2 p-4">
            <h1 class="text-3xl font-bold mb-4 text-purple-400">Sobre Mim</h1>
            <div class="relative bg-gray-800 p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-2 text-purple-400">Experiência</h2>
                <p class="text-gray-200">Aqui você pode adicionar informações sobre sua experiência profissional.</p>
                <h2 class="text-xl font-semibold mt-4 mb-2 text-purple-400">Habilidades</h2>
                <p class="text-gray-200">Aqui você pode listar suas habilidades e competências.</p>

                <div id="brincadeira" class="mt-8">

                    <div id="opcoes" class="flex mt-2 relative">

                        <img id="nao" src="{{ asset('images/rei.png') }}" onmouseover="moverNao()" class="cursor-pointer w-54 h-48">
                    </div>

                </div>
            </div>
        </div>

        <div id="courses" class="container mx-auto mt-10">
            <h2 class="text-3xl font-bold mb-4 text-purple-400">Cursos Disponíveis</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <div class="bg-gray-800 rounded-lg shadow-lg p-4">
                    <h3 class="text-xl font-bold mb-2 text-purple-400">Curso 1</h3>
                    <p class="text-gray-200">Descrição do Curso 1.</p>
                </div>
                <div class="bg-gray-800 rounded-lg shadow-lg p-4">
                    <h3 class="text-xl font-bold mb-2 text-purple-400">Curso 2</h3>
                    <p class="text-gray-200">Descrição do Curso 2.</p>
                </div>
            </div>
        </div>
    </div>

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
