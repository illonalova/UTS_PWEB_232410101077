<?php

namespace App\Models;

class Login
{
    public static function allUsers()
    {
        return [
            [
                'username' => 'Lova',
                'password' => '2345'
            ],
        ];
    }

    public static function checkCredentials($username, $password)
    {
        foreach (self::allUsers() as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                return true;
            }
        }
        return false;
    }
}

