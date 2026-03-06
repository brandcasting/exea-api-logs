<?php

use App\Modules\SongRequest\Controllers\SongRequestController;
use App\Modules\StatusPos\Controllers\StatusPosController;
use Illuminate\Support\Facades\Route;

Route::prefix("status_pos")->group(function () {
    Route::post("/", [StatusPosController::class, "create"]);
});
