<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorUsuarios; 
use DB;
use Carbon\Carbon;

class ControllerReUsuarios extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consR = DB::table('registro_usuarios_table')->get();
        return view('Usuarios', compact('consR'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('registroUsuarios'); 
    }

    public function store(validadorUsuarios $request)
    {
        DB::table('registro_usuarios_table')->insert([
            "Nombre" => $request->input('Nombre'),
            "AP" => $request->input('AP'),
            "AM" => $request->input('AM'),
            "CorreoUsu" => $request->input('CorreoUsu'),
            "puesto" => $request->input('puesto'),
            "Contraseña" => $request->input('Contraseña'),
        ]);

        return redirect('/registrarUsuarios')->with('confirmacion', 'Tu recuerdo llegó al controlador');
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
