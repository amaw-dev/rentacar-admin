<?php

namespace App\Rentcar\Localiza\Exceptions;

class OutOfSchedulePickupDateException extends LocalizaResponseException {
    public function __construct($context = []){
        parent::__construct([
            'error'     => 'out_of_schedule_pickup_date_error',
            'message'   => __('localiza.out_of_schedule_pickup_date_error'),
        ], $context);
    }
}
