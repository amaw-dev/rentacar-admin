<?php

namespace App\Http\Resources\DataProvider;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class CategoryModelDataProviderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name'    =>  $this->name,
            'image'     =>  (App::environment('production')) ? asset($this->image) : asset("storage/carcategories/car.png"),
            'description'   =>  $this->description,
            'default'   =>  ($this->default) ? true : false,
        ];
    }
}
