<?php

namespace App\Rentcar\Localiza\Exceptions;

class HolidayReturnDateBranchException extends LocalizaResponseException {
    public function __construct($context = []){
        parent::__construct([
            'error' => 'holiday_return_date_branch',
            'message' => __('localiza.holiday_return_date_branch')
        ], $context);
    }
}
