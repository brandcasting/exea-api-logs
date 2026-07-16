<?php

use App\Modules\Users\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('users')->group(function () {
    Route::get('/check', [UserController::class, 'check']);
    Route::post('/', [UserController::class, 'store']);
});
