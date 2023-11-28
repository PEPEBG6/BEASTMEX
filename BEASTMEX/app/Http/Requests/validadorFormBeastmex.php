<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorFormBeastmex extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'Producto' => 'required',
            'Fecha' => 'required|date', 
            'Cliente' => 'required|numeric',
            'CantidadPro' => 'required|numeric', 
            'Marca' => 'required',
            'Cantidad' => 'required|numeric',
            'Precio' => 'required|numeric', 
            'Total' => 'required|numeric', 
            

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            // Definir las reglas de validación aquí
            'almNombre'=>'required|min:10',
            'almNoSerie'=>'required',
            'almMarca'=>'required',
            'almCantidad'=>'required',
            'almCostoC'=>'required',
            'almPrecioVen'=>'required',
            'almFechaIn'=>'required',
            'almImagen'=>'required',

            


        ];
    }
}
