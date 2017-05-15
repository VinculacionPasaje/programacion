<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FooterRequest extends FormRequest
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
            'telefono' => 'required|max:255',
            'fax' => 'required|max:255',
            'direccion' => 'required|max:200',
            'web' => 'required|max:500',
            'email' => 'required|email|max:255',
            'anio' => 'required|max:4',
        ];
    }
}
