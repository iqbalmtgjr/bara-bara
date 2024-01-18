<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index(): string
    {
        return view('auth/login');
    }

    public function register(): string
    {
        return view('auth/register');
    }
}
