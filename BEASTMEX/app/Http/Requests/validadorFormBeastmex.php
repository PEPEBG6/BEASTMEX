<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorFormBeastmex extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            // Almacen
            'almNombre'=>'required',
            'almNoSerie'=>'required',
            'almMarca'=>'required',
            'almCantidad'=>'required',
            'almCostoC'=>'required',
            'almPrecioVen'=>'required',
            'almFechaIn'=>'required',
            'almImagen'=>'required',


            //Compras
            'Empresa'=>'required',
            'Productos'=>'required',
            'Proveedor'=>'required',
            'CorreoCom'=>'required',

            //Usuarios
            'Nombre'=>'required',
            'AP'=>'required',
            'AM'=>'required',
            'CorreoUsu'=>'required',
            'puesto'=>'required',
            'Contraseña'=>'required',

            //Ventas
            'Producto'=>'required',
            'Fecha'=>'required',
            'Cliente'=>'required',
            'CantidadPro'=>'required',
            'Marca'=>'required',
            'Cantidad'=>'required',
            'Precio'=>'required',
            'total'=>'required',




            

        ];
    }
}