<?php

namespace App\Http\Controllers\API;

use App\Rentcar\Localiza\VehAvailRate\LocalizaAPIVehAvailRate;
use App\Http\Requests\VehicleAvailableRateRequest;
use App\Http\Controllers\Controller;

class VehicleAvailableRateController extends Controller
{
    public function __invoke(VehicleAvailableRateRequest $request)
    {
        $pickupLocation = $request->input('pickupLocation');
        $returnLocation = $request->input('returnLocation');
        $pickupDateTime = $request->input('pickupDateTime');
        $returnDateTime = $request->input('returnDateTime');


        $localizaApi = new LocalizaAPIVehAvailRate(
            $pickupLocation,
            $returnLocation,
            $pickupDateTime,
            $returnDateTime,
        );

        return $localizaApi->getData();

    }



}
