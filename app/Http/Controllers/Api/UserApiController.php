<?php

namespace App\Http\Controllers\Api;


use App\Models\Account;
use App\Models\textUser;
use App\Mail\RegisterMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\UserRegisterRequest;

class UserApiController extends Controller
{
    public function users() {
        $users = textUser::all();

        return response()->json($users);
        
        //return $users;
    }

    public function numComteGenerate(): int
    {
        do {
          $account_num = random_int(100000000, 999999999);

        }while (Account::where('account_num', $account_num)->exists());
        return $account_num;
    }

    public function store_user(UserRegisterRequest $request) {

        $userCreated = null;
        
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

        $userCreated = $user;
    

        session()->flash('user', $user);

        return response()->json([
            "message" => "user created successfully",
            "user" => $userCreated,

        ]);
    }


    public function show_users() {
        $users = textUser::all();

        return response()->json($users);
    }

   
}
