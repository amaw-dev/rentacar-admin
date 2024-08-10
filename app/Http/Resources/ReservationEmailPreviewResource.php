<?php

namespace App\Http\Resources;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReservationEmailPreviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $image = $this->categoryObject->models->first()->image;
        $cloudStorageProviderURI = Str::of(config('filesystems.disks.gcs.storage_api_uri'));
        $imageProdURI = $cloudStorageProviderURI->append($image);
        $imageDevURI = asset("storage/carcategories/car.png");

        $category = Str::after($this->categoryObject->category, $this->categoryObject->name);
        $description = Str::words($this->categoryObject->description, 3, '');

        $includedFees = match(true){
            $this->selected_days == 30 && $this->total_insurance => "Kilometraje: {$this->monthly_mileage}, Seguro total",
            $this->selected_days == 30 && !$this->total_insurance => "Kilometraje: {$this->monthly_mileage}, Seguro básico",
            $this->selected_days < 30 && $this->total_insurance => "Kilometraje ilimitado, Seguro total",
            $this->selected_days < 30 && !$this->total_insurance => "Kilometraje ilimitado, Seguro básico",
        };

        return [
            'fullname' => $this->fullname,
            'identification_type' => $this->formattedShortIdentificationType(),
            'identification' => $this->identification,
            'reserve_code' => $this->reserve_code,
            'category_name' => $this->categoryObject->name,
            'category_category' => $category,
            'category_description' => $description,
            'category_image' => (App::environment('production')) ? $imageProdURI : $imageDevURI,
            'selected_days'  =>  $this->selected_days,
            'pickup_branch'  =>  $this->pickupLocation->name,
            'pickup_city'  =>  $this->formattedPickupCity(),
            'pickup_date'  =>  $this->formattedPickupDate(),
            'pickup_hour'  =>  $this->formattedPickupHour(),
            'return_branch'  =>  $this->returnLocation->name,
            'return_city'  =>  $this->formattedReturnCity(),
            'return_date'  =>  $this->formattedReturnDate(),
            'return_hour'  =>  $this->formattedReturnHour(),
            'extra_hours'  =>  $this->extra_hours,
            'extra_hours_price' => $this->formattedExtraHoursPrice(),
            'coverage_price' => $this->formattedCoveragePrice(),
            'return_fee' => ($this->return_fee > 0) ? $this->formattedReturnFee() : 0,
            'tax_fee' => $this->formattedTaxFee(),
            'iva_fee' => $this->formattedIVAFee(),
            'subtotal_fee' => $this->formattedSubtotalPrice(),
            'total_fee' => $this->formattedTotalPrice(),
            'included_fees'  =>  $includedFees,
        ];
    }
}
