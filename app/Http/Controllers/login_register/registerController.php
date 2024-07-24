<?php

namespace App\Http\Controllers\login_register;

use App\Http\Controllers\Controller;
use App\Http\Requests\userRegisterRequest;
use App\Models\text_user;
use Illuminate\Http\Request;

class registerController extends Controller
{
    function registerView()
    {
        return view('login_register.register');
    }

    function registerView_1()
    {
        return view('login_register.register_1');
    }

    function registerView_2()
    {
        return view('login_register.register_2');
    }

    function modalView() {
        return view('login_register.modal');
    }

    function codeView()
    {
        return view('login_register.code');
    }

   public function registerUser(userRegisterRequest $request)
    {
        $user = text_user::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'numero' => $request->numero,
            'code' => bcrypt($request->code),
        ]);

        return redirect()->route('loginView');
    }
}
