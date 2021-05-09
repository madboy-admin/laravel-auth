<?php

namespace MadBoyDevelopers\LaravelAuth;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelAuthServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name('laravel-auth')
            ->hasConfigFile('laravel-auth')
            ->hasTranslations()
            ->hasMigration('create_users_table');
    }
}
