<?php

namespace App\Jobs;

use App\Models\LogVehAvailableRatesQuery;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class LogVehAvailableRatesQueryJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $requestParameters;
    public $localizaResponseStatus;
    public $localizaResponseRaw;
    public $processedData;
    public $errorResponse;

    /**
     * Create a new job instance.
     *
     * @param \Illuminate\Http\Client\Response $localizaResponseStatus
     * @param \Illuminate\Http\Client\Response $localizaResponseRaw
     * @param array $requestParameters
     * @param array|null $processedData
     * @return void
     */
    public function __construct($localizaResponseStatus, $localizaResponseRaw, $requestParameters, $processedData)
    {
        $this->localizaResponseStatus = $localizaResponseStatus;
        $this->localizaResponseRaw = $localizaResponseRaw;
        $this->requestParameters = $requestParameters;
        $this->processedData = $processedData;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        LogVehAvailableRatesQuery::create([
            "request_parameters"    =>  json_encode($this->requestParameters),
            "response_status"       =>  $this->localizaResponseStatus,
            "response_raw"          =>  $this->localizaResponseRaw,
            "processed_data"        =>  json_encode(($this->errorResponse) ? $this->errorResponse : $this->processedData),
            "source_ip"             =>  request()->ip(),
        ]);
    }
}
