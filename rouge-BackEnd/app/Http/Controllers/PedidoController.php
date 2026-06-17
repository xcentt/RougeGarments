<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    
    public function index()
    {
        $pedido = DB::Table('pedido') -> get();

        return response() -> JSON ($pedido,200);

    }


    public function store(Request $request)
    {

        $request -> validate(['estado' => 'required|string|max:50', 'monto' => 'required|numeric|min:0', 'monto_del_descuento' => 'required|numeric|min:0', 'codigo_seguimiento' => 'required|string|max:100', 'id_usuario' => 'required|integer']);


        DB::Table('pedido') -> insert(['fecha_compra' => now(), 'estado' => $request -> input('estado'), 'monto' => $request -> input('monto'), 'monto_del_descuento' => $request -> input('monto_del_descuento'), 'codigo_seguimiento' => $request -> input('codigo_seguimiento'), 'id_usuario' => $request -> input('id_usuario') ]);

        return Response () -> JSON (['message' => 'Pedido registrado sexitosamente', 201]);




    }

    
    
}
