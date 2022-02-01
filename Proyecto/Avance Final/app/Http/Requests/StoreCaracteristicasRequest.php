<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCaracteristicasRequest extends FormRequest
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
            'situacion_laboral' => 'required',
            'inscrip_cne' => 'required|numeric',
            'mision_hogaresp' => 'required|numeric',
            'mision_josegregorio' => 'required|numeric',
            'mision_partohumanizado' => 'required|numeric',
            'mision_lactanciamaterna' => 'required|numeric',
            'mision_amormayor' => 'required|numeric',
            'mision_chambajuvenil' => 'required|numeric',
            'mision_movimientosomosv' => 'required|numeric',
            'organizacion_p' => 'required',
            'carnet_patria' => 'required|numeric',
            'codigo_carnet' => 'required|numeric',
            'serial_carnet' => 'required|numeric',
            'recibe_clap' => 'required|numeric',
            'nro_mercados' => 'required|numeric',
            'talla_zapato' => 'required|numeric',
            'tallaC_id' => 'required|numeric',
            'tallaP_id' => 'required|numeric',
            'persona_id' => 'required',
            'nucleof_id' => 'required'
        ];
    }
}
