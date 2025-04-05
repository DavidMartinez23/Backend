<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {   
        //consulta en la base de datos
        $listProducts = Product::paginate();

        // dd($listProducts);

        return view('products.index',[
            'listProducts' => $listProducts
        ]); //retornar una lista de productos
    }

    public function create()
    {
        return view('products.create'); //retorna el formulario para crear un producto
    }

    public function show($id)
    {   
        $product = Product::find($id);
        return view('products.show', [
            'product' => $product
        ]); //retorna el detalle de un producto
    }
}
