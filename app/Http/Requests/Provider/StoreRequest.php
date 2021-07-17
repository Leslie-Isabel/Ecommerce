<?php

namespace App\Http\Requests\Provider;

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
            'name'=>'required|string|max:255',
            'email'=>'required|string|max:200|email:rfc,dns|unique:providers',
            'document'=>'required|string|max:10|min:10|unique:providers',
            'address'=>'nullable|string|max:255',
            'phone'=>'required|string|max:10|min:8|unique:providers'
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'El campo nombre es requerido.',
            'name.string'=>'El campo nombre de solo debe contener letras.', 
            'name.max'=>'El campo nombre solo permite 255 caracteres.',

            'email.required'=>'El campo email es requerido.',
            'email.string'=>'El campo email solo debe contener letras.',
            'email.max'=>'El campo email solo permite 200 caracteres.',
            'email.email'=>'El campo email debe ser una dirección de correo electrónico válida.',
            'email.unique'=>'El campo email ya esta en uso.',

            'document.required'=>'El campo cédula es requerido.',
            'document.string'=>'El campo cédula solo debe contener letras.',
            'document.max'=>'El campo cédula solo permite 10 caracteres.',
            'document.min'=>'El campo cédula debe contener 10 caracteres.',
            'document.unique'=>'El campo cédula ya esta en uso.',

            'address.string'=>'El campo dirección solo debe contener letras.',
            'address.max'=>'El campo dirección solo permite 255 caracteres.',

            'phone.required'=>'El campo teléfono es requerido.',
            'phone.string'=>'El campo teléfono solo debe contener letras.',
            'phone.max'=>'El campo teléfono solo permite 10 caracteres.',
            'phone.min'=>'El campo teléfono debe contener almenos 8 caracteres.',
            'phone.unique'=>'El campo teléfono ya esta en uso.',
           
        ];
    }
}
