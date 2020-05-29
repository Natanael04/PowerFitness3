<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MiembrosGuardarRequest extends FormRequest
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
            'rut' => 'max:10|required|unique:users,rut,',
            'name' => 'required',
            'apellido' => 'required',
            'email' => 'required|unique:users,email,',
            'password' => 'required',
        ];
    }
}
