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