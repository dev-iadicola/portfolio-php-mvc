<?php

namespace App\Model;


use App\Core\ORM;

class Log extends ORM
{
    static string $table = 'logs';

    static array $fillable = ['user_id', 'last_log', 'indirizzo'];

    public static function ceateLog()
    {
        $default = [
            'user_id'=> 1, 
            'indirizzo' => $_SERVER['REMOTE_ADDR'], 
            'last_log' => date('Y-m-d H:i:s', time())
        ];
       $log = Log::save($default);

        return $log;
        
    }
}
