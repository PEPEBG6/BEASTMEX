<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidadorFormBeastmex;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\View;

class diarioController extends Controller
{
    public function mostrarLogin()
    {
        return view('login');
    }

    public function mostrarAlmacen()
    {
        return view('almacen');
    }

    public function mostrarCompras()
    {
        return view('compras');
    }

    public function mostrarRegistroAlmacen()
    {
        return view('registroAlmacen');
    }

    public function mostrarRegistroCompras()
    {
        return view('registroCompras');
    }

    public function mostrarVentas()
    {
        return view('ventas');
    }

    public function mostrarRegistroVentas()
    {
        return view('registroVentas');
    }

    public function mostrarGerencia()
    {
        return view('gerencia');
    }

    public function mostrarRegistroGerencia()
    {
        return view('registroGerencia');
    }

    public function mostrarUsuarios()
    {
        return view('usuarios');
    }

    public function mostrarRegistroUsuarios()
    {
        return view('registroUsuarios');
    }

    public function mostrarConsultaCompras()
    {
        return view('consultaCompras');
    }

    public function mostrarConsultaVentas()
    {
        return view('consultaVentas');
=======
use App\Http\Requests\validadorFormBeastmex;

class diarioController extends Controller
{
    public function metodoLogin(){
        return view('login');
    }

    public function metodoAlmacen(){
        return view('almacen');
    }

    public function metodoCompras(){
        return view('compras');
    }

    public function metodoVentas(){
        return view('ventas');
    }

    public function metodoGerencia(){
        return view('gerencia');
    }

    public function metodoRegistroAlmacen(){
        return view('registroAlmacen');
    }

    public function metodoGuardarRA(validadorFormBeastmex $req){

        return redirect('/regAlm')->with('confirmacion','Todo correcto:'.$req->input('almNombre'));
        
    
>>>>>>> 61c2d1a5079dee44aabe0d41bb4d6593f3ec35fd
    }
}
