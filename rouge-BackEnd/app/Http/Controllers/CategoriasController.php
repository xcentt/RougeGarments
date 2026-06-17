<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriasController extends Controller
{
    
    public function index()
    {
        $categorias= DB::Table('categorias') -> get();

        return response() -> JSON ($categorias,200);
        
    }


    public function store(Request $request)
    {

    $request -> validate(['nombre' => 'required|string|max:100', 'descuento' => 'required|numeric|min:0', 'id_categoria_padre' => 'required|integer']);

    DB::Table('categorias') -> insert(['nombre' => $request -> input('nombre'), 'descuento' => $request -> input('descuento'), 'id_categoria_padre' => $request -> input('id_categoria_padre')]);

    return Response() -> JSON (['message' => 'categoria registrada sexitosamente', 201]);


    }

  
    
}
