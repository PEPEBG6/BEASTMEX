<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidadorFormBeastmex;
use Illuminate\Http\Request;
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
    }
}
