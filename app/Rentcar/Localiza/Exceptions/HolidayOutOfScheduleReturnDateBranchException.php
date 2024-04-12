<?php

namespace App\Rentcar\Localiza\Exceptions;

class HolidayOutOfScheduleReturnDateBranchException extends LocalizaResponseException {
    public function __construct($context = []){
        parent::__construct([
            'error' => 'holiday_out_of_schedule_return_date_branch',
            'message' => __('localiza.holiday_out_of_schedule_return_date_branch')
        ], $context);
    }
}
