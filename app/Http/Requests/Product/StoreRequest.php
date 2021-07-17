<?php

namespace App\Http\Requests\Product;

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
            'name'=>'required|string|unique:products|max:255',
            'picture'=>'required|dimensions:min_width=100,min_height=200',
            'sell_price'=>'required',
            
        
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'El campo nombre es requerido.',
            'name.string'=>'El campo nombre de solo debe contener letras.',
            'name.unique'=>'El campo nombre ya esta en uso.',
            'name.max'=>'El campo nombre solo permite 255 caracteres.',

            'picture.required'=>'El campo imagen es requerido.',
            'picture.dimensions'=>'La imagen debe ser de 100x200 px.',

            'sell_price.required'=>'El campo precio es requerido.',
       

            
        ];
    }
}
