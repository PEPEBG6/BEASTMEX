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
            'almNombre'=>'required|alpha',
            'almNoSerie'=>'required|string',
            'almMarca'=>'required|alpha',
            'almCantidad'=>'required|numeric',
            'almCostoC'=>'required|numeric',
            'almPrecioVen'=>'required|numeric',
            'almFechaIn'=>'required|date',
            'almImagen'=>'required',
            


        ];
    }
}