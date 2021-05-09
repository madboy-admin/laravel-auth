<?php

namespace MadBoyDevelopers\LaravelAuth\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];

    public function getTable()
    {
        return config('laravel-auth.tables.users', parent::getTable());
    }
}