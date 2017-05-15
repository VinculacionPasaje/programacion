<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MapasRequest extends FormRequest
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
            'titulo'=>'required|max:50',
            'descripcion'=>'required|max:50',
            'path'=>'required|file|mimes:jpeg,bmp,png|max:10240',
        ];
    }
}
