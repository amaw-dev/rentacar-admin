<?php

namespace App\Rentcar\Localiza;

use Illuminate\Support\Arr;
use App\Rentcar\Localiza\Exceptions\OutOfSchedulePickupDateException;
use App\Rentcar\Localiza\Exceptions\OutOfSchedulePickupHourException;
use App\Rentcar\Localiza\Exceptions\OutOfScheduleReturnDateException;
use App\Rentcar\Localiza\Exceptions\OutOfScheduleReturnHourException;
use App\Rentcar\Localiza\Exceptions\NoAvailableCategoriesException;
use App\Rentcar\Localiza\Exceptions\SameHourException;
use App\Rentcar\Localiza\Exceptions\InferiorPickupDateException;
use App\Rentcar\Localiza\Exceptions\InferiorReturnDateException;
use App\Rentcar\Localiza\Exceptions\HolidayPickupDateBranchException;
use App\Rentcar\Localiza\Exceptions\HolidayReturnDateBranchException;
use App\Rentcar\Localiza\Exceptions\HolidayOutOfSchedulePickupDateBranchException;
use App\Rentcar\Localiza\Exceptions\HolidayOutOfScheduleReturnDateBranchException;
use App\Rentcar\Localiza\Exceptions\UnknowException;

class ProcessWarning {
    public $errors = [
        "LLNRRE002" => InferiorPickupDateException::class,
        "LLNRAG009" => NoAvailableCategoriesException::class,
        "LLNRRE010" => SameHourException::class,
        "LLNRAG011" => OutOfSchedulePickupHourException::class,
        "LLNRAG012" => HolidayPickupDateBranchException::class,
        "LLNRAG013" => OutOfSchedulePickupDateException::class,
        "LLNRAG014" => HolidayOutOfScheduleReturnDateBranchException::class,
        "LLNRAG015" => OutOfScheduleReturnHourException::class,
        "LLNRAG016" => HolidayReturnDateBranchException::class,
        "LLNRAG017" => OutOfScheduleReturnDateException::class,
    ];

    /**
     * @param \SimpleXMLElement $warning
     * @param array $context
     * @param App\Jobs\LogVehAvailableRatesQueryJob|null $job
     */
    public function __construct($warning, $context, $job = null){
        $code = (string) $warning->attributes()->ShortText;

        $exception = null;

        if(Arr::exists($this->errors, $code))
            $exception = new $this->errors[$code];
        else $exception = new UnknowException($context);

        if($job){
            $job->errorResponse = $exception->original;
            dispatch($job);
        }

        abort($exception);
    }
}
