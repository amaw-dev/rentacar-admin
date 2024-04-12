<?php

namespace App\Rentcar\Localiza\Exceptions;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class LocalizaResponseException extends JsonResponse {
    public function __construct($content, $context){
        Log::info($content, $context);
        parent::__construct($content, $status=500);
    }
}
