<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSituacionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->user_id == auth()->user()->id){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            '1Condicion_terreno' => 'required|numeric',
            '2Forma_Tenencia' => 'required|numeric',
            '3Tipo_Vivienda' => 'required|numeric',
            '4Habitaciones_Vivienda' => 'required|numeric',
            '5Tipo_Paredes' => 'required|numeric',
            '6Tipo_Techo' => 'required|numeric',
            'vivienda_id' => 'required|numeric',
            'nucleof_id' => 'required|numeric',
            'comunidad_id' => 'required|numeric'
        ];
    }
}
