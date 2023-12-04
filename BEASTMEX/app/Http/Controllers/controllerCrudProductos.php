<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormBeastmex;
use DB;
use Carbon\Carbon;

class controllerCrudProductos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consAlm=DB::table('tb_productos')->get();
        
        return view('almacen',compact('consAlm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //desplegar formulario
        return view('registroAlmacen');//el nombre de la vista
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorFormBeastmex $request)
    {
        DB::table('tb_productos')->insert([
            "nombre"=> $request->input('almNombre'),
            "no_serie"=> $request->input('almSerie'),
            "marca"=> $request->input('almMarca'),
            "cantidad"=> $request->input('almCantidad'),
            "costo_compra"=> $request->input('almCostoC'),
            "precio_venta"=> $request->input('almPrecioVen'),
            "fecha_ingreso"=> $request->input('almFechaIn'),
            "imagen"=> $request->input('almImagen'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);

        return redirect('/registroAlmacen/create')->with('confirmacion', 'Tu producto llegó al controlador');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
