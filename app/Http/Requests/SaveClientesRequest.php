<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveClientesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'email' => 'email|required',
            'edad' => 'required',
            'sexo' => 'required',
            'direccion' => 'required',
            'estado' => 'required',
            'estado_nacimiento' => 'required',
            'altura' => 'required',
            'peso' => 'required',
            'categoria' => 'required',
            'codigo_cliente' => 'required'
            //
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'nombre.required' => 'El usurio necesita un nombre'
    //     ];
    // }
}
