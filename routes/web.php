<?php

use App\Http\Controllers\login_register\loginController;
use App\Http\Controllers\login_register\registerController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/login', [loginController::class, 'loginView'])->name('loginView');
Route::get('/register', [registerController::class, 'registerView'])->name('registerView');
Route::get('/register1', [registerController::class, 'registerView_1'])->name('registerView1');
Route::get('/register_2', [registerController::class, 'registerView_2'])->name('registerView2');
Route::get('/modal', [registerController::class, 'modalView'])->name('modalView');
Route::get('/code', [registerController::class, 'codeView'])->name('codeView');

