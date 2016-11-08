<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoEditRequest extends FormRequest
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
            

            'nombre' => 'required|min:3',
            'descripcion' => 'required|min:3',
            //'categoria_id' =>  'required',
            //'imagen' => 'image|mimes:jpeg, png, bmp, gif, or svg',
            'stock' => 'required',
            'precio' => 'required'
        ]; 
    }
}