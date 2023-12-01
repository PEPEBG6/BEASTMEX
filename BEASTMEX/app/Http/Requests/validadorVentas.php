<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorVentas extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //Ventas
            'Producto'=>'required|alpha',
            'Fecha'=>'required|date',
            'Cliente'=>'required|alpha',
            'CantidadPro'=>'required|numeric',
            'Marca'=>'required|alpha',
            'Cantidad'=>'required|numeric',
            'Precio'=>'required|numeric',
            'total'=>'required|numeric',
        ];
    }
}
