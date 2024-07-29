<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\text_user;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboardView() {
        $users = text_user::orderBy('id', 'desc')->take(10)->get();
        return view('admin.adminDashboard', compact('users'));
    }
}
