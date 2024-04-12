<?php

namespace App\Rentcar\Localiza\Exceptions;

class NoAvailableCategoriesException extends LocalizaResponseException {
    public function __construct($context = []){
        parent::__construct([
            'error'     => 'no_available_categories_error',
            'message'   => __('localiza.no_available_categories_error')
        ], $context);
    }
}
