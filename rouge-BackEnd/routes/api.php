<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\Detalle_PedidoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\RopaController;
use App\Http\Controllers\Ropa_VariacionController;


route::get('/usuario', [UsuarioController::class,'index']);

route::get('/roles', [RolController::class, 'index']);

route::get('/categorias', [CategoriasController::class, 'index']);

route::get('/detalle_pedido',[Detalle_PedidoController::class, 'index']); 

route::get('/pedido', [PedidoController::class, 'index']);

route::get('/Ropa', [RopaController::class, 'index']);

route::get('/ropa_variacion', [Ropa_VariacionController::class, 'index']);

route::post('/usuarios', [UsuarioController::class,'store']);

route::post('/Ropa', [RopaController::class, 'store']);

route::post('/ropa_variacion', [Ropa_VariacionController::class, 'store']);

route::post('/roles', [RolController::class,'store']);

route::post('/pedido', [PedidoController::class, 'store']);

route::post('/detalle_pedido', [Detalle_PedidoController::class, 'store']);

route::post('/categorias', [CategoriasController::class, 'store']);


