<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Carro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <form action="{{ route('carros.update', ['carro' => $carro->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="codigo" class="block text-gray-700 font-bold mb-2">Código:</label>
                            <input type="text" id="codigo" name="codigo" value="{{ $carro->codigo }}" class="form-input rounded-md shadow-sm w-full" placeholder="Código">
                        </div>
                        <div class="mb-4">
                            <label for="descricao" class="block text-gray-700 font-bold mb-2">Descrição:</label>
                            <input type="text" id="descricao" name="descricao" value="{{ $carro->descricao }}" class="form-input rounded-md shadow-sm w-full" placeholder="Descrição">
                        </div>
                        <div class="mb-4">
                            <label for="valor" class="block text-gray-700 font-bold mb-2">Valor:</label>
                            <input type="number" id="valor" name="valor" value="{{ $carro->valor }}" class="form-input rounded-md shadow-sm w-full pl-8" placeholder="Valor">
                        </div>
                        <div class="mb-4">
                            <label for="url_imagem" class="block text-gray-700 font-bold mb-2">URL da Imagem:</label>
                            <input type="text" id="url_imagem" name="url_imagem" value="{{ $carro->url_imagem }}" class="form-input rounded-md shadow-sm w-full" placeholder="URL da Imagem">
                        </div>
                        <div class="flex justify-between">
                            <button type="submit" class="submit-button">
                                Adicionar
                            </button>
                            <a href="{{ route('carros.index') }}" class="cancel-button">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

