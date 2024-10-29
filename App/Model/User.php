<?php

namespace App\Model;


use App\Core\ORM;

class User extends ORM
{
    public static string $table = 'users';

    static array $fillable = [
        'email', 'password','token','indirizzo', 'last_log'
    ];

    public static function changePassword(string $password, string $email)
    {
        $user =  User::where('email', $email)->first();
        if(empty($user)){
            return false;
        }
        $password = password_hash($password, PASSWORD_BCRYPT);

        $user->update(['password' => $password]);

    
        return $user;
    }

   
}
