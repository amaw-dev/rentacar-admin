<?php

namespace App\Http\Resources\DataProvider;

use App\Models\Branch;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Str;

class LandingDataProviderCollection extends ResourceCollection
{
    public $collects = LandingDataProviderResource::class;
    public $franchise;
    public $city;

    public function __construct($resource, $franchise) {
        $this->franchise = $franchise;
        parent::__construct($resource);
    }

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $this->city = $request['city'];

        return [
            'categories'    =>  $this->collection,
            'page_config'   => (new PageConfigDataProviderResource($this->franchise))->toArray($request),
            'branches'      =>  (new BranchDataProviderCollection(Branch::all()))->toArray($request),
            'city'          =>  Str::slug($this->city->name)
        ];
    }
}
