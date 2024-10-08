<?php

namespace App\Http\Controllers\login_register;

use App\Models\Account;
use App\Models\textUser;
use App\Mail\RegisterMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\TokenVerifyRequest;
use App\Http\Requests\UserRegisterRequest;

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
          $account_num = random_int(100000000, 999999999);

        }while (Account::where('account_num', $account_num)->exists());
        return $account_num;
    }


   public function registerUser(UserRegisterRequest $request)
    {

        $token = str_pad(random_int(0, 9999), 4, '0', STR_PAD_LEFT);
        $account_num = $this->numComteGenerate();
        $tokenVerif = 0;
        $session = 0;
        $accountStatus = 'non-active';
        $balance = 0.00;

        $user = textUser::create([
            'nom' => $request->nom,
            'user_id' => $request->id,
            'prenom' => $request->prenom,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'numero' => $request->numero,
            'code' => bcrypt($request->code),
            'token' => $token,
            'tokenVerif' => $tokenVerif,
            'session' => $session,
        ]);

        if ($user) {

            // Create corresponding account record
            $account = new Account([
                'user_id' => $user->id,
                'account_num'=> $account_num,
                'balance'=>$balance,
                'status'=>$accountStatus

            ]);


            $account->save();

            Mail::to($user->email)->send(new RegisterMail($user));
        
        }
    

        session()->flash('user', $user);

        return redirect()->route('codeView');
    }

    public function tokenVerify(TokenVerifyRequest $request)
    {
        $token = $request->token;

        $user = textUser::where('token', $token)->first();

        if ($user) {
            $user->update(['tokenVerif' => 1]);
            return redirect()->route('loginView')->with('success', 'Votre code est valide');
        }else {
            return redirect()->route('codeView')->with('error', 'Votre code est invalide');
        }

    }



}
