<?php

namespace App\Http\Resources\DataProvider;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use App\Traits\HTMLCodeTrait;

class CategoryDataProviderResource extends JsonResource
{
    use HTMLCodeTrait;

    protected $category;

    public function __construct($category) {
        $this->category = $category;
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'    =>  $this->category->identification,
            'identification'    =>  $this->category->identification,
            'name'      =>  $this->category->name,
            'category'  =>  $this->category->category,
            'description'   =>  $this->category->description,
            'image'     =>  (App::environment('production')) ? asset($this->category->image) : asset("storage/{$this->category->image}"),
            'ad'    =>  $this->noCSSCode($this->category->ad),
            'models'    =>  new CategoryModelDataProviderCollection($this->category->models()->orderByDesc('default')->get()),
            'month_prices'  => new CategoryMonthPriceDataProviderCollection($this->category->monthPrices()->get())
        ];
    }
}
