<?php
// app/Services/AuthService.php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function login(array $credentials)
    {
        if (Auth::attempt($credentials)) {
            return true;
        }
        return false;
    }
}
