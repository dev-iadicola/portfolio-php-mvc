<?php

namespace App\Middleware;

use App\Core\Mvc;
use App\Model\User;
use App\Core\Services\AuthService;
use App\Core\Services\GuestService;
use App\Core\Services\SessionService;
use App\Core\Contract\MiddlewareInterface;

class RateLimitMiddleware implements MiddlewareInterface
{



    private int $requestLimit = 60;
    private int $timeWindow = 60;



    public function exec(Mvc $mvc)
    {
        $currentTimem = time();

        // Ottieni il GUEST_TOKEN o identificativo dell'utente

        $guestData = GuestService::get();

        $token = $guestData->AUTH_TOKEN;

        $createRateLimit = $this->createRateLimit($token);
        var_dump($createRateLimit);

        var_dump($guestData->AUTH_TOKEN);
    }

    // Inizializza le richieste per il client se non esistono

    private function createRateLimit($token) {

        if(!SessionService::has( 'rate_limit' )){
            SessionService::create(['rate_limit']);
            return SessionService::get(['rate_limit']);
        }
    }

    // Recupera i dati di rate limit

    private function recoverLastRateLimit() {}

    // Verifica se siamo ancora nella finestra temporale

    private function verifyTimeWindow() {}
}
