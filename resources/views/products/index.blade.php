@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Lista de Productos</h2>
        <div class="row">
            @php
                $products = [
                    ['name' => 'Camiseta Deportiva', 'category' => 'Ropa', 'price' => 25.99, 'image' => 'camiseta.jpg'],
                    [
                        'name' => 'Zapatillas Running',
                        'category' => 'Calzado',
                        'price' => 59.99,
                        'image' => 'zapatillas.jpg',
                    ],
                    [
                        'name' => 'Reloj Inteligente',
                        'category' => 'Tecnología',
                        'price' => 99.99,
                        'image' => 'reloj.jpg',
                    ],
                    [
                        'name' => 'Mochila Escolar',
                        'category' => 'Accesorios',
                        'price' => 35.5,
                        'image' => 'mochila.jpg',
                    ],
                    [
                        'name' => 'Auriculares Bluetooth',
                        'category' => 'Electrónica',
                        'price' => 45.0,
                        'image' => 'auriculares.jpg',
                    ],
                    [
                        'name' => 'Chaqueta Impermeable',
                        'category' => 'Ropa',
                        'price' => 79.99,
                        'image' => 'chaqueta.jpg',
                    ],
                ];
            @endphp

            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/' . $product['image']) }}" class="card-img-top"
                            alt="{{ $product['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <p class="card-text"><strong>Categoría:</strong> {{ $product['category'] }}</p>
                            <p class="card-text"><strong>Precio:</strong> ${{ number_format($product['price'], 2) }}</p>
                            <form action="#" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-warning w-100">Agregar al Carrito</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
