<?php

namespace App\Core\Services;


class GuestService extends BaseUser
{

    // prelevo  dati server del guest
    public static function get()
    {
      
        self::startSessionGuest();

        return (object) SessionService::getAll();
    }

    // creazione token del singolo guest

    protected static function startSessionGuest()
    {
        
        if (!SessionService::has('AUTH_TOKEN')) {
            SessionService::set('AUTH_TOKEN', self::generateToekn());
        }
    }

    // elimina la sessione da admin 
   
}
