<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarUserRequest extends FormRequest
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
            'nombre'      => 'required|max:100',
            'apellido' => 'required|max:100',
            'email'     => 'required|email|unique:users',
            'user'      => 'required|unique:users|min:4|max:20',
            'password'  => 'required|confirmed',
            'type'      => 'required|in:user,admin'
        ];
    }
}
