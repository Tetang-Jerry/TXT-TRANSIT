<?php

namespace App\Http\Controllers\login_register;

use App\Http\Controllers\Controller;
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
}
