<?php

namespace MadboyDevelopers\LaravelAuth;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MadboyDevelopers\LaravelAuth\LaravelAuth
 */
class LaravelAuthFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-auth';
    }
}
