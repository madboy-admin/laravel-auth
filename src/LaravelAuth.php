<?php


namespace MadBoyDevelopers\LaravelAuth;


use Illuminate\Support\Facades\Route;

class LaravelAuth
{
    private static string $namespace = 'MadBoyDevelopers\\LaravelAuth\\Http\\Controllers';

    public static function routes()
    {
        Route::middleware('web')
            ->namespace(self::$namespace)
            ->prefix(
                env('APP_API_VERSION', '') . '/' .
                config('laravel-auth.routes.auth_prefix', 'auth')
            )
            ->group(__DIR__ . '/../routes/web.php');
    }
}
