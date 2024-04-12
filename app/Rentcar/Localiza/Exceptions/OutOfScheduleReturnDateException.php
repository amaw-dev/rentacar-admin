<?php

namespace App\Rentcar\Localiza\Exceptions;

use Illuminate\Http\Response;

class OutOfScheduleReturnDateException extends LocalizaResponseException {
    public function __construct($context = []){
        parent::__construct([
            'error'     => 'out_of_schedule_return_date_error',
            'message'   => __('localiza.out_of_schedule_return_date_error'),
        ], $context);
    }
}
