<?php 
namespace App\Core\Services;

class BaseUser {

    protected static function generateToekn ($length = 32){
        return bin2hex(random_bytes($length));
    }
}