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

        return [
            'fullname' => $this->fullname,
            'identification_type' => $this->formattedShortIdentificationType(),
            'identification' => $this->identification,
            'reserve_code' => $this->reserve_code,
            'category_name' => $this->categoryObject->name,
            'category_category' => $category,
            'category_description' => $description,
            'category_image' => (App::environment('production')) ? $imageProdURI : $imageDevURI,
            'pickup_branch'  =>  $this->pickupLocation->name,
            'pickup_city'  =>  $this->formattedPickupCity(),
            'pickup_date'  =>  $this->formattedPickupDate(),
            'pickup_hour'  =>  $this->formattedPickupHour(),

        ];
    }
}
