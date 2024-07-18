<?php

namespace App\Http\Controllers\login_register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function loginView() {
        return view('login-register.login');
    }
}
