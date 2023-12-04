<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormBeastmex;
use App\Http\Requests\validadorCompras;
use App\Http\Requests\validadorVentas;
use App\Http\Requests\validadorUsuarios;

class diarioController extends Controller
{
    public function metodoLogin()
    {
        return view('login');
    }

    public function metodoAlmacen()
    {
        return redirect()->route('Almacen.index');
    }

    public function metodoCompras()
    {
        return redirect()->route('Compras.index');
    }

    public function metodoVentas()
    {
        return redirect()->route('Ventas.index');
    }

    public function metodoUsuarios()
    {
        return redirect()->route('Usuarios.index');
    }

    public function metodoRegistroAlmacen()
    {
        return view('registroAlmacen');
    }

    public function metodoGuardarRA(validadorFormBeastmex $req)
    {
        return redirect('/regAlm')->with('confirmacion', 'Todo correcto:' . $req->input('almNombre'));
    }

    public function metodoRegistroCompras()
    {
        return view('registroCompras');
    }

    public function metodoGuardarRC(validadorCompras $req)
    {
        return redirect('/registrarCompras')->with('confirmacion', 'Todo correcto:' . $req->input('Empresa'));
    }

    public function metodoRegistroVentas()
    {
        return view('registroVentas');
    }

    public function metodoGuardarVE(validadorVentas $req)
    {
        return redirect('/registrarVentas')->with('confirmacion', 'Todo correcto:' . $req->input('Producto'));
    }

    public function metodoRegistroUsuarios()
    {
        return view('registroUsuarios');
    }

    public function metodoGuardarUS(validadorUsuarios $req)
    {
        return redirect('/registrarUsuarios')->with('confirmacion', 'Todo correcto:' . $req->input('Nombre'));
    }
}
