<?php

use App\Modules\Courses\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard/courses')
    ->group(function () {
        Route::get('/', [CourseController::class, 'index'])->name('courses.index');
        Route::get('/create', [CourseController::class, 'create'])->name('courses.create');
        Route::post('/', [CourseController::class, 'store'])->name('courses.store');
    });
