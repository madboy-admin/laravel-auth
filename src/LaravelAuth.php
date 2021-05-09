<?php


namespace MadBoyDevelopers\LaravelAuth;


use Illuminate\Support\Facades\Route;
use MadBoyDevelopers\LaravelAuth\Http\Controllers\AuthController;

class LaravelAuth
{
    private static string $namespace = 'MadBoyDevelopers\\LaravelAuth\\Http\\Controllers';

    public static function apiRoutes()
    {
        $config = config('laravel-auth.routes', []);

        Route::group([
            'namespace' => self::$namespace,
            'prefix' => $config['api_version'] ?? ''
        ], function () use ($config) {

            // Auth prefix
            Route::prefix($config['auth_prefix'] ?? '')->group(function () {

                Route::get('/login', [AuthController::class, 'login']);

            });

        });
    }
}