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
        return true;
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
            'username' => ['required', 'min:6', 'unique:bank_users,username'],
            'email' => ['required', 'email', 'unique:bank_users,email'],
            'password' => ['required', 'min:8', 'unique:bank_users,password'],
            'passwordVerify' => ['required', 'same:password'],
            'numero'=>['required', 'digits:9', 'unique:bank_users,numero'],
            'code'=>['required', 'digits:4', 'unique:bank_users,code'],
            'codeVerify' => ['required', 'same:code'],
        ];
    }
}
