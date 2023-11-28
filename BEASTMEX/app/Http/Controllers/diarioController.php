<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        
    
    }

    public function metodoRegistroCompras(){
        return view('registroCompras');
    }

    public function metodoGuardarRC(validadorFormBeastmex $req){

        return redirect('/regCom')->with('confirmacion','Todo correcto:'.$req->input('Empresa'));
        
    
    }

    public function metodoRegistroVentas(){
        return view('registroVentas');
    }

    public function metodoGuardarVE(validadorFormBeastmex $req){

        return redirect('/regVen')->with('confirmacion','Todo correcto:'.$req->input('Producto'));
        
    
    }
}