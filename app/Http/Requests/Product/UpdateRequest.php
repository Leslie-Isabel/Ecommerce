<?php

namespace App\Http\Requests\Product;

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
            'name'=>'required|string|unique:products,name,'. $this->route('products')->id .'|max:255',
            'image'=>'required|dimensions:min_width=100,min_height=200',
            'sell_price'=>'required',
            'category_id'=>'integer|required|exists:App\Category,id',
            'provider_id'=>'integer|required|exists:App\Provider,id'
        
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'El campo nombre es requerido.',
            'name.string'=>'El campo nombre de solo debe contener letras.',
            'name.unique'=>'El campo nombre ya esta en uso.',
            'name.max'=>'El campo nombre solo permite 255 caracteres.',

            'image.required'=>'El campo imagen es requerido.',
            'image.dimensions'=>'La imagen debe ser de 100x200 px.',

            'sell_price.required'=>'El campo precio es requerido.',

            'category_id.integer'=>'El valor debe ser entero.',
            'category_id.required'=>'El campo es requerido.',
            'category_id.exists'=>'La categoria no existe.',

            'provider_id.integer'=>'El valor debe ser entero.',
            'provider_id.required'=>'El campo es requerido.',
            'provider_id.exists'=>'El proveedor no existe.',

            
        ];
    }
}
