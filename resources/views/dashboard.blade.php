<x-app-layout>
    <x-slot name="header">
        <h2 class="header-title">
            {{ __('Carros') }}
        </h2>
    </x-slot>

    <div class="content-container">
        <div class="car-grid">
            @foreach ($carros as $carro)
                <div class="car-card">
                    <div class="card-header"></div>

                    <img class="car-image" src="{{ $carro->url_imagem }}" alt="{{ $carro->descricao }}" style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">

                    <h2 class="car-price">R$ {{ number_format($carro->valor, 2, ',', '.') }}</h2>

                    <p class="car-description">
                        {{ $carro->descricao }}
                    </p>

                    <div class="action-buttons">
                        <a href="{{ route('carros.edit', $carro) }}" class="edit-button">
                            Editar
                        </a>
                        <!-- <form action="{{ route('carros.destroy', $carro) }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button class="delete-button">
                                Deletar
                            </button>
                        </form> -->
                        <form action="{{ route('carros.destroy', $carro) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="delete-button" type="submit">Deletar</button>
                        </form>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        .car-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Dois cards por linha */
            gap: 16px;
        }
        .car-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 16px;
            display: flex;
            flex-direction: column;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .car-price {
            font-size: 1.25rem;
            font-weight: bold;
            margin: 8px 0;
            text-align: left;

        }
        .car-description {
            font-size: 0.875rem;
            color: #555;
            text-align: left;
            margin-bottom: 16px;
        }
        .action-buttons {
            display: flex;
            gap: 8px;
        }
        .delete-button, .edit-button {
            padding: 8px 12px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.875rem;
        }

    </style>
</x-app-layout>
