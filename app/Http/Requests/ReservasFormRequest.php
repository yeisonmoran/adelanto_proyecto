<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservasFormRequest extends FormRequest
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
            'fecha_reserva' => 'required',
            'num_personas' => 'required',
            'estado' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'fecha_reserva' => 'el fecha de reserva no puede estar vacio',
            'num_personas' => 'el campo numero de personas no puede estar vacio',
            'estado' => 'el campo estado no puede estar vacio',
        ];
    }
}
