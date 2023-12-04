<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TuModelo;
use PDF; // Agrega esta línea para importar la clase PDF
use Illuminate\Support\Facades\Validator;

class AlmacenController extends Controller
{
    // ... (otros métodos)

    public function generatePDF()
    {
        $consR = TuModelo::all(); // Reemplaza TuModelo con el nombre real de tu modelo

        $pdf = PDF::loadView('almacen.pdf', compact('consR'));

        return $pdf->download('reporte_almacen.pdf');
    }
}



class AlmacenController extends Controller
{
    // ... (otros métodos)

    private function calcularPrecioVenta($costoCompra)
    {
        // Puedes aplicar tu lógica de cálculo aquí, por ejemplo, agregar un margen de ganancia fijo
        $margenGanancia = 0.2; // 20%
        $precioVenta = $costoCompra * (1 + $margenGanancia);

        return $precioVenta;
    }

    public function guardarAlmacen(Request $request)
    {
        // Validación de datos
        $validator = Validator::make($request->all(), [
            'almNombre' => 'required|string|max:255',
            'almNoSerie' => 'required|string|max:255',
            // ... (otras reglas de validación)
        ]);

        if ($validator->fails()) {
            return redirect('/tu-ruta')
                ->withErrors($validator)
                ->withInput();
        }

        // Obtén los datos del formulario
        $almNombre = $request->input('almNombre');
        $almNoSerie = $request->input('almNoSerie');
        // ... (obtén otros datos)

        // Calcula el precio de venta
        $almCostoC = $request->input('almCostoC');
        $almPrecioVen = $this->calcularPrecioVenta($almCostoC);

        // Crea el nuevo registro en la base de datos
        TuModelo::create([
            'almNombre' => $almNombre,
            'almNoSerie' => $almNoSerie,
            'almCostoC' => $almCostoC,
            'almPrecioVen' => $almPrecioVen,
            // ... (otros campos)
        ]);

        // ... (otras acciones después de almacenar el registro)

        return redirect('/tu-ruta')->with('confirmacion', 'Producto registrado con éxito');
    }
}

