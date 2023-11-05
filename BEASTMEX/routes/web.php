<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){

    return view('login');
});
Route::get('/almacen', function(){

    return view('almacen');
}); 
Route::get('/compras', function(){

    return view('compras');
});
Route::get('/regAlm', function(){

    return view('registroAlmacen');
});
Route::get('/regCom', function(){

    return view('registroCompras');
});
Route::get('/ventas', function(){

    return view('ventas');
});
Route::get('/regVen', function(){

    return view('registroVentas');
});
Route::get('/gerencia', function(){

    return view('gerencia');
});
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