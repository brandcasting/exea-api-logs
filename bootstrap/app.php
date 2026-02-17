<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        health: '/up',
        then: function () {
            foreach (glob(app_path('Modules/*/Routes/api.php')) as $routeFile) {
                Route::prefix('api')
                    ->middleware('api')
                    ->group($routeFile);
            }
            foreach (glob(app_path('Modules/*/Routes/web.php')) as $routeFile) {
                Route::middleware('web')
                    ->group($routeFile);
            }
        }
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (\Illuminate\Validation\ValidationException $e, $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => 'Validation failed',
                    'errors'  => $e->errors(),
                ], 422);
            }
            return null;
        });
    })->create();
