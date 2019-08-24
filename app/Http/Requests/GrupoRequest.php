<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;

class GrupoRequest extends FormRequest
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
            'nombre' => 'unique:grupos'
        ];
    }



    public function messages()
    {
        return [
            'nombre.unique' => 'El :attribute ya existe'
          
        ];
    }


    public function attributes()
    {
        return [
            'nombre' => 'nombre del grupo'
            
        ];
    }
}
