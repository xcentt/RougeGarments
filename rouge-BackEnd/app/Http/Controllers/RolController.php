<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RolController extends Controller
{
   
    public function index()
    {
        
        $roles=DB::Table('rol') -> get();

        return response() -> JSON ($roles,200);
    


    }


    public function store(Request $request)
    {

    $request -> validate(['nombre' => 'required|string|max: 10']);

    DB::Table('rol') -> insert(['nombre' => $request -> input('nombre')]);


    return Response() -> JSON(['message' => 'rol registrado sexitosamente', 201]);


    }

  
}
