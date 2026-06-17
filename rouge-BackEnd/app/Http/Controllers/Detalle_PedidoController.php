<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Detalle_PedidoController extends Controller
{
    
    public function index()
    {
        $detalle_pedido= DB::Table('detalle_pedido') -> get();

        return response() -> JSON ($detalle_pedido,200);
    }
    

    public function store(Request $request)
    {

    $request -> validate(['id_pedido' => 'required|integer', 'id_ropa_variacion' => 'required|integer', 'cantidad' => 'required|integer', 'precio_venta' => 'required|numeric|min:0']);


    DB::Table('detalle_pedido') -> insert(['id_pedido' => $request -> input('id_pedido'), 'id_ropa_variacion' => $request -> input('id_ropa_variacion'), 'cantidad' => $request -> input('cantidad'), 'precio_venta' => $request -> input('precio_venta')]);
    

    return Response() -> JSON (['message' => 'Detalles registrados sexitosamente', 201]);



    }
   
}
