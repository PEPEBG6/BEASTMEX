<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorVentas; 
use DB;
use Carbon\Carbon;

class ControllerReVentas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consR = DB::table('registro_ventas_table')->get();
        return view('Ventas', compact('consR'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registroVentas'); // Asegúrate de tener una vista llamada 'registroVentas'
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorVentas $request)
    {
        DB::table('registro_ventas_table')->insert([
            "Producto" => $request->input('Producto'),
            "Fecha" => $request->input('Fecha'),
            "Cliente" => $request->input('Cliente'),
            "CantidadPro" => $request->input('CantidadPro'),
            "Marca" => $request->input('Marca'),
            "Precio" => $request->input('Precio'),
            "total" => $request->input('total'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);

        return redirect('/registrarVentas')->with('confirmacion', 'Tu recuerdo llegó al controlador');
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
        DB::table('registro_compras_table')->where('id',$id)-> update([
            "Producto" => $request->input('Producto'),
            "Fecha" => $request->input('Fecha'),
            "Cliente" => $request->input('Cliente'),
            "CantidadPro" => $request->input('CantidadPro'),
            "Marca" => $request->input('Marca'),
            "Precio" => $request->input('Precio'),
            "total" => $request->input('total'),
            "updated_at"=>Carbon::now(),
    ]);
            return redirect('/ventas')->with('confirmacion','Tu recuerdo se modifico en BD');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('registro_ventas_table')->where('id', $id)->delete();

    return redirect('/ventas')->with('confirmacion', 'Tu recuerdo se eliminó de la BD');
}
}
