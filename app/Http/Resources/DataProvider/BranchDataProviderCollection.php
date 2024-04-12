<?php

namespace App\Http\Resources\DataProvider;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BranchDataProviderCollection extends ResourceCollection
{
    public $collects = BranchDataProviderResource::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return $this->collection;
    }
}
