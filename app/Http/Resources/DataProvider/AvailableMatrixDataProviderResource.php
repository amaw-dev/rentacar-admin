<?php

namespace App\Http\Resources\DataProvider;

use Illuminate\Http\Resources\Json\JsonResource;

class AvailableMatrixDataProviderResource extends JsonResource
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
            'branch_code'   =>  $this->branch->code,
            'available_status'     =>  $this->available,
            'categories'  =>  []
        ];

        foreach($this->availablePerCategories as $availablePerCategory){
            $data['categories'][] = (Object) [
                $availablePerCategory->category->identification
                =>
                [
                    'available'     =>  $availablePerCategory->available,
                    'init_date'     =>  $availablePerCategory->init_date,
                    'end_date'      =>  $availablePerCategory->end_date,
                ]
            ];
        }

        return (Object) $data;
    }
}
