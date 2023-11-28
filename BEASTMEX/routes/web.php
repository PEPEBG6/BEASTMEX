<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;


Route::get('/', [diarioController::class, 'metodoLogin'])->name('Login');


Route::get('/almacen', [diarioController::class, 'metodoAlmacen'])->name('Almacen');


Route::get('/compras', [diarioController::class, 'metodoCompras'])->name('Compras');


Route::get('/ventas', [diarioController::class, 'metodoVentas'])->name('Ventas');


Route::get('/gerencia', [diarioController::class, 'metodoGerencia'])->name('gerencia');


Route::get('/regAlm', [diarioController::class, 'metodoRegistroAlmacen'])->name('registroAlmacen');


Route::post('/guardarAlmacen', [diarioController::class, 'metodoGuardarRA'])->name('guardarRA');


Route::get('/regCom', [diarioController::class, 'metodoRegistroCompras'])->name('registroCompras');


Route::post('/guardarCompras', [diarioController::class, 'metodoGuardarRC'])->name('guardarRC');


Route::get('/regVen', [diarioController::class, 'metodoRegistroVentas'])->name('registroVentas');


Route::post('/guardarVentas', [diarioController::class, 'metodoGuardarVE'])->name('guardarVE');







Route::get('/regGer', function(){

    return view('registroGerencia');
});
Route::get('/usuarios', function(){

    return view('usuarios');
});
Route::get('/regUsua', function(){

    return view('registroUsuarios');
});
Route::get('/consultaCom', function(){

    return view('consultaCompras');
});
Route::get('/consultaVen', function(){

    return view('consultaVentas');
});