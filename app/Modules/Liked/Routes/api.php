<?php

use App\Modules\Liked\Controllers\LikedController;
use Illuminate\Support\Facades\Route;

Route::prefix("liked_song")->group(function () {
    Route::post("/", [LikedController::class, "store"]);
});
