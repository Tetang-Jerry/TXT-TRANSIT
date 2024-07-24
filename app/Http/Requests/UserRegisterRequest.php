<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
            //
            'nom' => ['required', 'min:6'],
            'prenom' => ['required', 'min:6'],
            'username' => ['required', 'min:6', 'unique:alpha_transit_users,username'],
            'email' => ['required', 'email', 'unique:alpha_transit_users,email'],
            'password' => ['required', 'min:8', 'unique:alpha_transit_users,password'],
            'passwordVerify' => ['required', 'same:password'],
            'numero'=>['required', 'digits:9', 'unique:alpha_transit_users,numero'],
            'code'=>['required', 'digits:4', 'unique:alpha_transit_users,code'],
            'codeVerify' => ['required', 'same:code'],
        ];
    }
}
