<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=>'required|string|max:50',
            'description'=>'nullable|string|max:250'
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'El campo nombre es requerido.',
            'name.string'=>'El campo nombre de solo debe contener letras.', 
            'name.max'=>'El campo nombre solo permite 255 caracteres.',
            
            'description.string'=>'El campo descripcion de solo debe contener letras.', 
            'description.max'=>'El campo descripcion solo permite 250 caracteres.',
        ];
    }
}
