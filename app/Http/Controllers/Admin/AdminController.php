<?php

namespace App\Http\Controllers\Admin;

use App\Models\textUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function adminDashboardView() {
        $users = textUser::orderBy('id', 'desc')->take(10)->get();
        return view('admin.adminDashboard', compact('users'));
    }

    public function deleteUser($id)
    {
        $user = textUser::findOrFail($id);
        $user->delete();
        return redirect()->route('adminDashboardView')->with('success', 'user deleted successfully');
    }
}
