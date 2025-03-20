@extends('layout.app')

@section('content')
    <!-- Contenido -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Crear Producto</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoría</label>
                        <select class="form-select" id="category" name="category" required>
                            <option value="Ropa">Ropa</option>
                            <option value="Calzado">Calzado</option>
                            <option value="Accesorios">Accesorios</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Precio</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Imagen del Producto</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-warning w-100">Guardar Producto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
