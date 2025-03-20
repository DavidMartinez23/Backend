@extends('layout.app')

@section('content')
    <!-- Contenido -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/zapatillas.jpg') }}" alt="Zapatillas Deportivas" class="product-image">
            </div>
            <div class="col-md-6">
                <div class="product-details">
                    <h2>Zapatillas Deportivas</h2>
                    <p><strong>Categoría:</strong> Calzado</p>
                    <p><strong>Descripción:</strong> Zapatillas deportivas de última tecnología, ideales para correr y hacer
                        ejercicio.</p>
                    <h4 class="text-danger">$ 79.99</h4>
                    <button class="btn btn-warning w-100 mt-3">Agregar al Carrito</button>
                </div>
            </div>
        </div>
    </div>
@endsection
