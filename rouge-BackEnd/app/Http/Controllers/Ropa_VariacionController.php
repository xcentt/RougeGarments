<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Ropa_VariacionController extends Controller
{
   
    public function index()
    {
       $ropa_variacion = DB::Table('ropa_variacion') -> get();

       return response() -> JSON ($ropa_variacion,200);
    }

    public function store(Request $request)
    {

        $request -> validate(['id_ropa' => 'required|integer', 'talla' => 'Required|string|max: 10', 'stock' => 'Required|numeric|min: 0']);


        DB::Table('ropa_variacion') -> insert(['id_ropa' => $request -> input('id_ropa'), 'talla' => $request -> input('talla'), 'stock' => $request -> input('stock')  ]);


        return Response() -> JSON (['message' => 'variacion registrada sexitosamente', 201 ]);

    }
    
    
}
