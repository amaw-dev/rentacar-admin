<?php

namespace App\Http\Resources\DataProvider;

use Illuminate\Http\Resources\Json\JsonResource;

class VisibilityMatrixDataProviderResource extends JsonResource
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
            'visible_status'     => (int) $this->visible,
            'categories'  =>  []
        ];

        foreach($this->visiblePerCategories as $visiblePerCategory){
            $visibeCategory = [
                'category'  =>  $visiblePerCategory->category->identification,
                'visible'     => (int) $visiblePerCategory->visible,
            ];

            if($visiblePerCategory->init_date)
                $visibeCategory['init_date'] = $visiblePerCategory->init_date;
            if($visiblePerCategory->end_date)
                $visibeCategory['end_date'] = $visiblePerCategory->end_date;

            $data['categories'][] = (Object) $visibeCategory;
        }

        return (Object) $data;
    }
}
