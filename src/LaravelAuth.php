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
                config('laravel-auth.routes.api_version', '') . '/' .
                config('laravel-auth.routes.api_version', 'auth_prefix')
            )
            ->group(base_path('../routes/web.php'));
    }
}