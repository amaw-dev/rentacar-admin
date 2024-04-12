<?php

namespace App\Rentcar\Localiza\Exceptions;

class UnknowException extends LocalizaResponseException {
    public function __construct($context = []){
        parent::__construct([
            'error' => 'unknown_error',
            'message' => __('localiza.unknown_error')
        ], $context);
    }
}
