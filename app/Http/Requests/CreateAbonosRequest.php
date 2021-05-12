<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAbonosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        // $this->user()->isAdmin()
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'folio' => 'required',
            'nombre' => 'required',
            'codigo' => 'required',
            'ultimo_saldo' => 'required',
            'credito_original' =>'required',
            'ultimo_abono' => 'required',
            'estado_activo' => 'required',
            'comentarios' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'El proyecto necesita un titulo'
        ];
    }
}
