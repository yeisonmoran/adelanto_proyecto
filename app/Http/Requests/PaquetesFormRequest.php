<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaquetesFormRequest extends FormRequest
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
            'Nombre' => 'required',
            'Descripcion' => 'required',
            'Precio_total' => 'required',
            'Fecha_salida' => 'required',
            'Fecha_regreso' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'Nombre' => 'el campo Nombre no puede estar vacio',
            'Descripcion' => 'el campo Descripcion no puede estar vacio',
            'Precio_total' => 'el campo Precio total no puede estar vacio',
            'Fecha_salida' => 'el campo Fecha de salida no puede estar vacio',
            'Fecha_regreso' => 'el campo Fecha de regreso no puede estar vacio',

        ];
    }
}
