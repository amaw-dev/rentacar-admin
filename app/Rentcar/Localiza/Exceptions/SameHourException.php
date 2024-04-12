<?php

namespace App\Rentcar\Localiza\Exceptions;

class SameHourException extends LocalizaResponseException {
    public function __construct($context = []){
        parent::__construct([
            'error'     => 'same_hour',
            'message'   => __('localiza.same_hour')
        ], $context);
    }
}
