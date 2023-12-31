<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorUsuarios extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //Usuarios
            'Nombre'=>'required|alpha',
            'AP'=>'required|alpha',
            'AM'=>'required|alpha',
            'CorreoUsu'=>'required|email',
            'puesto'=>'required',
            'Contraseña'=>'required',
        ];
    }
}
