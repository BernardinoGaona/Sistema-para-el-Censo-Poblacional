<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNucleoRequest extends FormRequest
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
            'jefe_id' => 'required|numeric',
            'jefe_name' => 'required',
            'vivienda_id' => 'required',
            'cant_personas' => 'required|numeric',
            'slug' => 'required|unique:personas'
        ];
    }
}
