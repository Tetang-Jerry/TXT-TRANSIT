<?php

namespace App\Http\Controllers\login_register;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function loginView() {
        return view('login_register.login');
    }

    public function adminLoginView() {
        return view('login_register.adminLogin');
    }

    public function passwordForgottenView() {
        return view('login_register.password_forgotten.password_oublier');
    }

    public function modalVerifView() {
        return view('login_register.password_forgotten.modalVerification');
    }

    public function codeVerifView() {
        return view('login_register.password_forgotten.codeVerif');
    }

    public function adminLogin(AdminLoginRequest $request)
    {
        $required = $request->only('email', 'password');;
        if (Auth::guard('admin_auth')->attempt($required)) {
            $admin = Auth::guard('admin_auth')->user();
            $admin->update(['session'=> 1]);
            return redirect()->intended('Admin/adminDashboard');
        }else {
            return redirect()->route('adminLoginView')->with('error', 'Email or password is not correct');
        }
    }

    public function adminLogout()
    {
        if (Auth::guard('admin_auth')->check()) {
            $admin = Auth::guard('admin_auth')->user();
            $admin->update(['session'=> 0]);
            Auth::guard('admin_auth')->logout();
        }
        return redirect()->route('adminLoginView');
    }

    public function userLogin(UserLoginRequest $request) {
        $required = $request->only('email', 'password');

        if (Auth::guard('user_auth')->attempt($required)) {
            $user = Auth::guard('user_auth')->user();
            if ($user->tokenVerif === '1') {
                $user->update(['session' => 1]);
                return redirect()->intended('dashboard');
            }else {
                return redirect()->route('loginView')->with('tokenerror', 'Please verify your token first');

            }
        }else {
            return redirect()->route('loginView')->with('error', 'Email or password Incorrext');
        }
    }

    public function userLogout() {
        if (Auth::guard('user_auth')->check()) {
            $user = Auth::guard('user_auth')->user();
            $user->update(['session' => 0]);
            Auth::guard('user_auth')->logout();

        }
        return redirect()->route('loginView');
    }
}
