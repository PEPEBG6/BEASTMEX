<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormBeastmex; 
use DB;
use Carbon\Carbon;

class ControllerReAlmacen extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consR= DB::table('registro_almacen_table')->get();
        return view('almacen',compact('consR'));
    }
    
    public function create()
    {
        return view('registroAlmacen'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorFormBeastmex $request)
    {
        if ($request->hasFile('almImagen')) {
            $imagen = $request->file('almImagen');
            $rutaImagen = $imagen->store('', 'public'); // Guardar la imagen en el disco público
        } else {
            $rutaImagen = null;
        }
        DB::table('registro_almacen_table')->insert([
            "almNombre" => $request->input('almNombre'),
            "almNoSerie" => $request->input('almNoSerie'),
            "almMarca" => $request->input('almMarca'),
            "almCantidad" => $request->input('almCantidad'),
            "almCostoC" => $request->input('almCostoC'),
            "almPrecioVen" => $request->input('almPrecioVen'),
            "almFechaIn" => $request->input('almFechaIn'),
            "almImagen" => $rutaImagen,
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);

        return redirect('/registrarAlmacen')->with('confirmacion', 'Tu recuerdo llegó al controlador');
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
    public function update(validadorFormBeastmex $request, string $id)
    {
        if ($request->hasFile('almImagen')) {
            $imagen = $request->file('almImagen');
            $rutaImagen = $imagen->store('', 'public'); 
        } else {
            $rutaImagen = null;
        }
        DB::table('registro_almacen_table')->where('id',$id)-> update([
            "almNombre" => $request->input('almNombre'),
            "almNoSerie" => $request->input('almNoSerie'),
            "almMarca" => $request->input('almMarca'),
            "almCantidad" => $request->input('almCantidad'),
            "almCostoC" => $request->input('almCostoC'),
            "almPrecioVen" => $request->input('almPrecioVen'),
            "almFechaIn" => $request->input('almFechaIn'),
            "almImagen" => $rutaImagen,
            "updated_at"=>Carbon::now(),
    ]);
            return redirect('/almacen')->with('confirmacion','Tu recuerdo se modifico en BD');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('registro_almacen_table')->where('id', $id)->delete();

    return redirect('/almacen')->with('confirmacion', 'Tu recuerdo se eliminó de la BD');
}

}
