<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCompras; 
use DB;

class ControllerReCompras extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consR = DB::table('registro_compras_table')->get();
        return view('Compras', compact('consR'));
    }
    
    public function create()
    {
        return view('registroCompras'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorCompras $request)
    {
        $rutaImagen = null;

        if ($request->hasFile('almImagen')) {
            $imagen = $request->file('almImagen');
            $rutaImagen = $imagen->store('', 'public'); // Guardar la imagen en el disco público
        }

        DB::table('registro_compras_table')->insert([
            "Empresa" => $request->input('Empresa'),
            "Productos" => $request->input('Productos'),
            "Proveedor" => $request->input('Proveedor'),
            "CorreoCom" => $request->input('CorreoCom'),
        ]);

        return redirect('/registrarCompras')->with('confirmacion', 'Tu recuerdo llegó al controlador');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Implementar lógica según sea necesario
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Implementar lógica según sea necesario
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Implementar lógica según sea necesario
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Implementar lógica según sea necesario
    }
}
