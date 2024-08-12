<?php

namespace App\Http\Controllers\User;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home()
    {
      return view('welcome');
    }

    public function dashboard() {
      $user = Auth::guard('user_auth')->user();
  
      // Retrieve the user's associated account
      $account = $user->account;
  
      // Pass the account object to the view
      return view('dashboard.main', compact('account'));
  }
}
