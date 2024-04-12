<?php

namespace App\Http\Resources\DataProvider;

use App\Models\Branch;
// use App\Models\BranchCategoryAvailableMatrix;
// use App\Models\BranchCategoryVisibilityMatrix;
// use App\Models\PriceMatrix;
use Illuminate\Http\Resources\Json\ResourceCollection;


class ReservasDataProviderCollection extends ResourceCollection
{

    protected $franchise;

    public $collects = ReservasDataProviderResource::class;

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
        return [
            'categories'    =>  $this->collection,
            'page_config'   =>  (new PageConfigDataProviderResource($this->franchise))->toArray($request),
            'branches'      =>  (new BranchDataProviderCollection(Branch::all()))->toArray($request),
            // 'prices'        =>  (new PriceMatrixDataProviderCollection(PriceMatrix::all()))->toArray($request),
            // 'available'     =>  (new AvailableMatrixDataProviderCollection(BranchCategoryAvailableMatrix::all()))->toArray($request),
            // 'visible'       =>  (new VisibilityMatrixDataProviderCollection(BranchCategoryVisibilityMatrix::all()))->toArray($request)
        ];
    }
}
