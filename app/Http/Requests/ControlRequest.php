<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;

class ControlRequest extends FormRequest
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
            'id_grupo' => 'unique:relacion_control,id_grupo,NULL,id,id_periodo,'.input::get('id_periodo').',id_maestro,'.input::get('id_maestro').',id_alumno,'.input::get('id_alumno').',id_asignatura,'.input::get('id_asignatura')
        ];
    }

    public function messages()
    {
        return [
            'id_grupo.unique' => 'La :attribute Entre maestro, asignatura, periodo, alumno ya existe verificar'
          
        ];
    }

    public function attributes()
    {
        return [
            'id_grupo' => 'Relacion'
            
        ];
    }
}
