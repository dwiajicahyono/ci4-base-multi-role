<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function login(): string
    {
        return view('auth/login', [
            'config' => config('Auth'),
        ]);
    }
    public function register(): string
    {
        return view('auth/register');
    }
    public function user(): string
    {
        return view('user/index');
    }
    public function myprofile(): string
    {
        return view('user/myprofile');
    }
    public function editprofile(): string
    {
        return view('user/editprofile');
    }
}
