<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeriodoRequest extends FormRequest
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
            'periodo' => 'unique:periodos'
        ];
    }

    public function messages()
    {
        return [
            'periodo.unique' => 'El :attribute ya existe'
          
        ];
    }


    public function attributes()
    {
        return [
            'periodo' => 'Periodo'
            
        ];
    }
}
