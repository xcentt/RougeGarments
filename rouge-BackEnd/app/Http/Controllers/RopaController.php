<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RopaController extends Controller
{
   
    public function index()
    {
        $ropa = DB::Table('Ropa') -> get();

        return response() -> JSON($ropa, 200, [], JSON_UNESCAPED_SLASHES);
    }


    public function store(Request $request)
    {

        $request -> validate(['nombre' => 'required|string|max: 100', 'descripcion' => 'nullable|string', 'precio' => 'required|numeric|min: 0', 'imagen_url' => 'nullable|url|max:255', 'activo' => 'required|integer|in:0,1', 'id_categoria' => 'required|integer']);


        DB::Table('Ropa') -> insert(['nombre' => $request -> input('nombre'), 'descripcion' => $request -> input('descripcion'), 'imagen_url' => $request->input('imagen_url'), 'precio' => $request -> input('precio'), 'activo' => $request -> input('activo'), 'id_categoria' => $request -> input('id_categoria')]);

        return response() -> JSON (['message' => 'Ropa registrada sexitosamente', 201, [], JSON_UNESCAPED_SLASHES]);



    }

  
}
