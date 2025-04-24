@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Lista de Productos</h2>
        <div class="row">
            @foreach ($listProducts as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/' . $product->image) }}" class="card-img-top"
                            alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text"><strong>Categoría:</strong> {{ $product->category->name ?? 'Sin categoría' }}</p>
                            <p class="card-text"><strong>Precio:</strong> ${{ number_format($product->price, 2) }}</p>
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
