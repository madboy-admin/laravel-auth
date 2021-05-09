<?php
return [

    'routes' => [

        /*
         * Authentication routes prefix.
         * Default: auth
         * Example : example.com/v1/auth  ==> auth is this property.
         *                          ^^^^
         */

        'auth_prefix' => 'auth'

    ],

    'tables' => [

        /*
         * Table name of database that contains users data.
         * Default: users
         */

        'users' => 'users'

    ],

    'models' => [

        /*
         * The model for User management. You can use custom model by replacing this value.
         * But first remember,
         * you just need to extends your custom model with " MadBoyDevelopers\LaravelAuth\Models\User  " class
         * and done. Replace your model fully qualified path here.
         * Default: MadBoyDevelopers\LaravelAuth\Models\User::class
         */

        'user' => MadBoyDevelopers\LaravelAuth\Models\User::class

    ]
];
