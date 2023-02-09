<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuscarDniRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'documento' => 'required|min:6|max:9',

        ];
    }

    public function messages()
    {
        return [
            'documento.min' => 'Documento debe tener minimo 6 caracteres',
            'documento.max' => 'Documento debe tener maximo 9 caracteres',
            'documento.required' => 'Documento es requerido',
        ];
    }

}
