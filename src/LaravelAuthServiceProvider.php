<?php

namespace MadBoyDevelopers\LaravelAuth;

use Spatie\LaravelPackageTools\Exceptions\InvalidPackage;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelAuthServiceProvider extends PackageServiceProvider
{
    /**
     * @throws InvalidPackage
     */
    public function register()
    {
        $this->registeringPackage();

        $this->package = new PackageHelper();

        $this->package->setBasePath($this->getPackageBaseDir());

        $this->configurePackage($this->package);

        if (empty($this->package->name)) {
            throw InvalidPackage::nameIsRequired();
        }

        if ($configFileName = $this->package->configFileName) {
            $this->mergeConfigFrom($this->package->basePath("/../config/{$configFileName}.php"), $configFileName);
        }

        $this->packageRegistered();

        return $this;
    }

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
