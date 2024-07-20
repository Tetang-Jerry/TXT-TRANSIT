<?php

namespace App\Http\Controllers\login_register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function loginView() {
        return view('login_register.login');
    }

    public function passwordForgottenView() {
        return view('login_register.password_forgotten.password_oublier');
    }

    public function modalVerifView() {
        return view('login_register.password_forgotten.modalVerification');
    }

    public function codeVerifView() {
        return view('login_register.password_forgotten.codeVerif');
    }}
