<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonaRequest extends FormRequest
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
            'cedula' => 'required|numeric',
            'names' => 'required',
            'surnames' => 'required',
            'sexo' => 'required',
            'fecha_n' => 'required',
            'parentesco' => 'required',
            'estado_civil' => 'required',
            'telefono' => 'required|numeric',
            'email' => 'required',
            'nivel_instruccion' => 'required',
            'profecion_ocu' => 'required',
            'slug' => 'required|unique:personas'
        ];
    }
}
