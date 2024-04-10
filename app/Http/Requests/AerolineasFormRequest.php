<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AerolineasFormRequest extends FormRequest
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
            'Nombre'=>'required',
            'Pais'=>'required',
            'Disponibilidad'=>'required',
            'Anio_fundacion'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'Nombre' => 'el campo nombre no puede estar vacio',
            'Pais' => 'el campo pais no puede estar vacio',
            'Disponibilidad' => 'el campo disponibilidad no puede estar vacio',
            'Anio_fundacion' => 'el campo año de fundacion no puede estar vacio',
        ];
    }
}
