<?php

namespace MadBoyDevelopers\LaravelAuth;

use Spatie\LaravelPackageTools\Package;

class PackageHelper extends Package
{
    public function shortName(): string
    {
        return $this->name;
    }
}
