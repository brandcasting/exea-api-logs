<?php

use App\Modules\SongRequest\Controllers\SongRequestController;
use Illuminate\Support\Facades\Route;

Route::prefix("song_request")->group(function () {
    Route::post("/", [SongRequestController::class, "store"]);
});
