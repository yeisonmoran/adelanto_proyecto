<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VuelosFormRequest extends FormRequest
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
            'origen' => 'required',
            'destino' => 'required',
            'fecha_salida' => 'required',
            'fecha_llegada' => 'required',
            'duracion' => 'required',
            'precio' => 'required',
            'asientos_disponibles' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'origen' => 'el campo origen no puede estar vacio',
            'destino' => 'el campo destino no puede estar vacio',
            'fecha_salida' => 'el campo fecha de salida no puede estar vacio',
            'fecha_llegada' => 'el campo fecha de llegada no puede estar vacio',
            'duracion' => 'el campo duracion no puede estar vacio',
            'precio' => 'el campo precio no puede estar vacio',
            'asientos_disponibles' => 'el campo asientos disponibles no puede estar vacio',

        ];
    }
}
