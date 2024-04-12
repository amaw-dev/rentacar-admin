<?php

namespace App\Http\Resources\DataProvider;

use App\Models\Category;
use App\Models\PriceMatrixBranch;
use Illuminate\Http\Resources\Json\JsonResource;

class PriceMatrixDataProviderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $data = [
            'price_matrix_id'   =>  $this->id,
            'date_ranges'       =>  $this->date_ranges,
            'price_matrix_data' =>  []
        ];


        foreach($this->priceMatrixBranches as $priceMatrixBranch){
            $data['price_matrix_data'][] = (Object) [
                'branch_code'   =>  $priceMatrixBranch->branch->code,
                'price_matrix'  => $this->createCategoryPriceMatrixObject($priceMatrixBranch)
            ];
        }

        return (Object) $data;
    }

    private function createCategoryPriceMatrixObject($priceMatrixBranch){
        $matrix = [];

        foreach(Category::all() as $category){
            $matrix[$category->identification] = $priceMatrixBranch->getPrice($category);
        }

        if($priceMatrixBranch->pricePerCategories()->exists()){
            foreach($priceMatrixBranch->pricePerCategories as $pricePerCategory ){
                $matrix[$pricePerCategory->category->identification] = $pricePerCategory->getPrice();
            }
        }

        return (Object) $matrix;
    }
}
