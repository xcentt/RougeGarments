<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    
    public function index()
    {

        $usuario= DB::Table('usuario') -> get ();

        return response() -> JSON ($usuario,200);


    }


    public function store(Request $request)
    {

        $request -> validate(['nombre' => 'required|string|max: 100', 'correo_electronico' => 'required|string|max: 150', 'password' => 'required|string|min: 6']); 

        DB::Table('usuario') -> insert(['nombre' => $request -> input('nombre'), 'correo_electronico' => $request -> input('correo_electronico'), 'password' => hash::make($request -> input('password')), 'direccion' => $request -> input('direccion'), 'telefono' => $request -> input('telefono'), 'id_rol' => $request -> input('id_rol'), 'fecha_registo' => now() ]); 


        return response() -> JSON (['message' => 'usuario registrado sexitosamente'], 201);


    }

   
}
