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
            'id_grupo' => 'unique:relacion_control,id_grupo,NULL,id_periodo,'.input::get('periodosel').',id_maestro,'.input::get('maestrosel').',id_alumno,'.input::get('alumnosel').',id_asignatura,'.input::get('asignaturasel'),
            'id_asignatura' => 'string',
        ];
    }
}
