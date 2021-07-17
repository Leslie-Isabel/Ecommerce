<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name.required'=>'Este campo es requerido.',
            'name.string'=>'Los valores ingresados deben ser letras.', 
            'name.max'=>'El campo solo permite 50 caracteres.',
            
            'description.string'=>'Los valores ingresados deben ser letras.', 
            'description.max'=>'El campo solo permite 250 caracteres.',
        ];
    }
}
