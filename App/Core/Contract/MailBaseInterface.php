<?php 
namespace App\Core\Contract; 

interface MailBaseInterface {


    public function sendEmail(
        string $to,
        string $subject,
        string $body,
        string $from = NULL,
        string $fromName = NULL,
    );

    public function mailPage(string $page): void;

}