<?php

namespace App\Rentcar\Localiza\Exceptions;

class NoDataFoundException extends LocalizaResponseException {
    public function __construct($context = []){
        parent::__construct([
            'error'     => 'data_not_found',
            'message'   => __('localiza.data_not_found')
        ], $context);
    }
}
