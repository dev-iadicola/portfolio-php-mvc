<?php 
namespace App\Core\Exception; 

class ModelStructureException extends \Exception {
    public function __construct($message = "", $code = 0){
        parent::__construct($message, $code);
    }
}