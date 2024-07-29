<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\login_register\loginController;
use App\Http\Controllers\login_register\registerController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\layout\LayoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'home'])->name('home');


Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');



Route::prefix('register')->group( function () {
    Route::get('/', [registerController::class, 'registerView'])->name('registerView');
    Route::get('/register1', [registerController::class, 'registerView_1'])->name('registerView1');
    Route::get('/register_2', [registerController::class, 'registerView_2'])->name('registerView2');
    Route::get('/modal', [registerController::class, 'modalView'])->name('modalView');
    Route::get('/code', [registerController::class, 'codeView'])->name('codeView');
    Route::post('/registerUser', [registerController::class, 'registerUser'])->name('registerUser');
    Route::post('tokenVerify', [registerController::class, 'tokenVerify'])->name('tokenVerify');

});


Route::prefix('login')->group( function () {
    Route::get('/', [loginController::class, 'loginView'])->name('loginView');
    Route::get('/passwordView', [loginController::class, 'passwordForgottenView'])->name('passView');
    Route::get('/modalVerif', [loginController::class, 'modalVerifView'])->name('modalVerifView');
    Route::get('/codeVerif', [loginController::class, 'codeVerifView'])->name('codeVerifView');
    Route::post('/Login', [loginController::class, 'userLogin'])->name('userLogin');
    Route::get('/logout', [loginController::class, 'userLogout'])->name('logoutUser');
});


Route::prefix('Admin')->group( function () {
   Route::get('/', [loginController::class, 'adminLoginView'])->name('adminLoginView');
   Route::get('/adminDashboard', [AdminController::class, 'adminDashboardView'])->name('adminDashboardView');
   Route::post('/loginAdmin', [loginController::class, 'adminLogin'])->name('adminLogin');
   Route::get('adminlogout', [loginController::class, 'adminLogout'])->name('adminLogout');

});
