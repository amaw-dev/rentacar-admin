<?php

namespace App\Rentcar\Localiza\Exceptions;

class TimeoutException extends LocalizaResponseException {
    public function __construct($context = []){
        parent::__construct([
            'error' =>  'connection_timeout',
            'message' => __('localiza.connection_timeout')
        ], $context);
    }
}
