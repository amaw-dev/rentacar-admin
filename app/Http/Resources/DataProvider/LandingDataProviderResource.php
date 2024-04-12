<?php

namespace App\Http\Resources\DataProvider;

use App\Models\CityCategoryVisibility;
use App\Models\Category;
use App\Models\City;
use App\Rentcar\CategoryBasePrice;
use Illuminate\Http\Resources\Json\JsonResource;

class LandingDataProviderResource extends JsonResource
{


    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $categoryData = (new CategoryDataProviderResource($this))->toArray($request);

        /**
         * getting the base price by selecting the first branch of the city and get the first price matrix branch
         * in a future is going to change
         *
        */
        $city = $request->input('city');
        $categoryInstance = $this->resource;

        // the following is due to develop, is the visible category, pending to confirm
        $categoryData['active'] = (integer) $this->getCategoryStatus($city, $categoryInstance);

        return $categoryData;
    }


    private function getCategoryStatus($city, $category){
        try {
            $visible = CityCategoryVisibility::where('city_id', $city->id)->where('category_id', $category->id)->first();
            if($visible){
                return $visible->visible;
            }

            return true;
        } catch (\Throwable $th) {
            return true;
        }
    }
}
