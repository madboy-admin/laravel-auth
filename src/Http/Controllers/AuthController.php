<?php

namespace MadBoyDevelopers\LaravelAuth\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use MadBoyDevelopers\LaravelAuth\Models\User;

class AuthController extends Controller
{
    /**
     * Login api method
     * @return JsonResponse
     */
    public function login(): JsonResponse
    {
        if (Auth::check())
            return json_response(true, 'User is already logged in!');

        $validator = Validator::make(request()->all(), [
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if ($validator->fails())
            return json_response(false, $validator->errors()->first());

        $user_class = config('laravel-auth.models.user', User::class);
        if (!class_exists($user_class))
            $user_class = User::class;
        /*
         * Setting up User Model using config model path.
         */
        Auth::setUser(new $user_class);

        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            return json_response(true, trans('laravel-auth::laravel-auth.success_login'));
        }

        return json_response(false, trans('laravel-auth::laravel-auth.email_password_wrong'));
    }

    /**
     * Get logged in user details.
     * @return JsonResponse
     */
    public function me(): JsonResponse
    {
        if (!Auth::check())
            return json_response(false, 'User is not logged in!');

        return json_response(true, 'User details.', ((array) Auth::user()));
    }
}
