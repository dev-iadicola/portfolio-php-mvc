<?php
/**
 * File per l'autenticazione dell'utente
 * gestione tramite Array 
 */

use App\Middleware\AdminMiddleware;
use App\Middleware\MaintenanceMiddleware;
use App\Middleware\RateLimitMiddleware;

return [
    '/' => [MaintenanceMiddleware::class, RateLimitMiddleware::class],

    '/admin' => [AdminMiddleware::class],
  
];