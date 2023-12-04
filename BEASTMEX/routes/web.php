<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;
use App\Http\Controllers\controllerCrudProductos;


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


Route::get('/regUsua', [diarioController::class, 'metodoRegistroUsuarios'])->name('registroUsuarios');


Route::post('/guardarUsuarios', [diarioController::class, 'metodoGuardarUS'])->name('guardarUS');




Route::get('/regGer', function(){

    return view('registroGerencia');
});
Route::get('/usuarios', function(){

    return view('usuarios');
});

Route::get('/consultaCom', function(){

    return view('consultaCompras');
});
Route::get('/consultaVen', function(){

    return view('consultaVentas');
});



Route::get('/registroAlmacen/create', [controllerCrudProductos::class,'create'])->name('prregistroAlmacenoducto.create');
Route::post('/registroAlmacen',[controllerCrudProductos::class,'store'])->name('registroAlmacen.store');
Route::get('/registroAlmacen', [controllerCrudProductos::class,'index'])->name('registroAlmacen.index');