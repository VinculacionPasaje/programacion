<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiversionRequest extends FormRequest
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
            'nombre_lugar'=>'required|max:500',
            'direccion'=>'required',
            'telefono'=>'required',
            'descripcion'=>'required|max:255',
            'fecha_post'=>'required',
            'id_categorias'=>'required',
            'contenido'=>'required',
            'path'=>'required|file|mimes:jpeg,bmp,png|max:10240',
        ];
    }
}
