<?php

namespace App\Http\Controllers\login_register;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\TokenVerifyRequest;
use App\Http\Requests\userRegisterRequest;
use App\Mail\RegisterMail;
use App\Models\text_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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


    function codeView()
    {
        return view('login_register.code');
    }

    public function numComteGenerate(): int
    {
        do {
          $num_compte = random_int(100000000, 999999999);

        }while (text_user::where('numCompte', $num_compte)->exists());
        return $num_compte;
    }


   public function registerUser(userRegisterRequest $request)
    {

        $token = str_pad(random_int(0, 9999), 4, '0', STR_PAD_LEFT);
        $num_compte = $this->numComteGenerate();
        $tokenVerif = 0;
        $session = 0;

        $user = text_user::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'numero' => $request->numero,
            'code' => bcrypt($request->code),
            'token' => $token,
            'numCompte' => $num_compte,
            'tokenVerif' => $tokenVerif,
            'session' => $session,
        ]);

        if ($user) {
            Mail::to($user->email)->send(new RegisterMail($user));
        }

        session()->flash('user', $user);

        return redirect()->route('codeView');
    }

    public function tokenVerify(TokenVerifyRequest $request)
    {
        $token = $request->token;

        $user = text_user::where('token', $token)->first();

        if ($user) {
            $user->update(['tokenVerif' => 1]);
            return redirect()->route('loginView')->with('success', 'Votre code est valide');
        }else {
            return redirect()->route('codeView')->with('error', 'Votre code est invalide');
        }

    }



}
