<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
      return view('welcome');
    }

    public function dashboard()
    {
        return view('dashboard.main');
    }
}
