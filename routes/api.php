<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserApiController;

Route::get('/getuser', [UserApiController::class, 'users']);
Route::post('/storeUser', [UserApiController::class, 'store_user']);