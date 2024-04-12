<?php

namespace App\Rentcar\Localiza\Exceptions;

use Illuminate\Http\Response;

class OutOfSchedulePickupHourException extends LocalizaResponseException {
    public function __construct($context = []){
        parent::__construct([
            'error'     => 'out_of_schedule_pickup_hour_error',
            'message'   => __('localiza.out_of_schedule_pickup_hour_error'),
        ], $context);
    }
}
