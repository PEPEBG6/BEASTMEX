<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;
use App\Http\Controllers\ControllerReAlmacen;
use App\Http\Controllers\ControllerReCompras;
use App\Http\Controllers\ControllerReVentas;
use App\Http\Controllers\ControllerReUsuarios;

// Route::get('/', [diarioController::class, 'metodoLogin'])->name('Login');


// Route::get('/almacen', [diarioController::class, 'metodoAlmacen'])->name('Almacen');


// Route::get('/compras', [diarioController::class, 'metodoCompras'])->name('Compras');


// Route::get('/ventas', [diarioController::class, 'metodoVentas'])->name('Ventas');


// Route::get('/usuarios', [diarioController::class, 'metodoUsuarios'])->name('Usuarios');


// Route::get('/gerencia', [diarioController::class, 'metodoGerencia'])->name('gerencia');


/* Route::get('/regAlm', [diarioController::class, 'metodoRegistroAlmacen'])->name('registroAlmacen'); */


/* Route::post('/guardarAlmacen', [diarioController::class, 'metodoGuardarRA'])->name('guardarRA'); */


// Route::get('/regCom', [diarioController::class, 'metodoRegistroCompras'])->name('registroCompras');


// Route::post('/guardarCompras', [diarioController::class, 'metodoGuardarRC'])->name('guardarRC');


// Route::get('/regVen', [diarioController::class, 'metodoRegistroVentas'])->name('registroVentas');


// Route::post('/guardarVentas', [diarioController::class, 'metodoGuardarVE'])->name('guardarVE');


// Route::get('/regUsua', [diarioController::class, 'metodoRegistroUsuarios'])->name('registroUsuarios');


// Route::post('/guardarUsuarios', [diarioController::class, 'metodoGuardarUS'])->name('guardarUS');




//  Route::get('/regGer', function(){
//      return view('registroGerencia');
//  });

 Route::get('/usuarios', function(){

     return view('usuarios');
});

//  Route::get('/consultaCom', function(){

//     return view('consultaCompras');
// });
//  Route::get('/consultaVen', function(){

//      return view('consultaVentas');
//  });


// Route::get('/gerencia', [diarioController::class, 'metodoGerencia'])->name('gerencia');
Route::get('/', [diarioController::class, 'metodoLogin'])->name('Login');
Route::get('/almacen', [diarioController::class, 'metodoAlmacen'])->name('Almacen');
Route::get('/compras', [diarioController::class, 'metodoCompras'])->name('Compras');
Route::get('/ventas', [diarioController::class, 'metodoVentas'])->name('Ventas');
Route::get('/usuarios', [diarioController::class, 'metodoUsuarios'])->name('Usuarios');

Route::get('/Almacen', [ControllerReAlmacen::class,'index'])->name('Almacen.index');
Route::get('/registrarAlmacen', [ControllerReAlmacen::class,'create'])->name('registrarAlmacen.create');
Route::post('/guardarAlmacen',[ControllerReAlmacen::class,'store'])->name('guardarAlmacen.store');

Route::get('/Compras', [ControllerReCompras::class,'index'])->name('Compras.index');
Route::get('/registrarCompras', [ControllerReCompras::class,'create'])->name('registrarCompras.create');
Route::post('/guardarCompras',[ControllerReCompras::class,'store'])->name('guardarCompras.store');

Route::get('/Ventas', [ControllerReVentas::class,'index'])->name('Ventas.index');
Route::get('/registrarVentas', [ControllerReVentas::class,'create'])->name('registrarVentas.create');
Route::post('/guardarVentas',[ControllerReVentas::class,'store'])->name('guardarVentas.store');

Route::get('/Usuarios', [ControllerReUsuarios::class,'index'])->name('Usuarios.index');
Route::get('/registrarUsuarios', [ControllerReUsuarios::class,'create'])->name('registrarUsuarios.create');
Route::post('/guardarUsuarios',[ControllerReUsuarios::class,'store'])->name('guardarUsuarios.store');