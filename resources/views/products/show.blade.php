@extends('layout.app')

@section('content')
    <!-- Contenido -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
            </div>
            <div class="col-md-6">
                <div class="product-details">
                    <h2>{{ $product->name }}</h2>
                    <p><strong>Categoría:</strong> {{ $product->category->name ?? 'Sin categoría' }}</p>
                    <p><strong>Descripción:</strong> {{ $product->description }}</p>
                    <h4 class="text-danger">${{ number_format($product->price, 2) }}</h4>
                    <button class="btn btn-warning w-100 mt-3">Agregar al Carrito</button>
                </div>
            </div>
        </div>
    </div>
@endsection
