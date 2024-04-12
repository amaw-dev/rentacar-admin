<?php

namespace App\Rentcar;

use App\Models\City;
use App\Models\Category;

class CategoryBasePrice {

    public $iva;
    public $admin_rate;
    public $insurances_types;
    public $city;
    public $category;

    public function __construct(City $city, Category $category) {
        $this->iva = 0.19;
        $this->admin_rate = 0.10;
        $this->insurances_types = collect([
            [
                'type' => 'low_gamma',
                'categories' => ['A','C','F','FX','LY','FY'],
                'daily_price' => 29000,
            ],
            [
                'type' => 'high_gamma',
                'categories' => ['G','GC','GD','G4','GX','LE','P','GR'],
                'daily_price' => 49000,
            ],
        ]);

        $this->city = $city;
        $this->category = $category;
    }

    public function getTrueCategoryBasePrice(){
        try {
            $base_price = $this->getCategoryBasePrice();
            $with_iva = ($base_price / (1 + $this->iva));
            $with_admin_rate = $with_iva / (1 + $this->admin_rate);
            $insurance_price = $this->getInsuranceDailyPrice();
            $total = $with_admin_rate - $insurance_price;
            return $total;
        } catch (\Throwable $th) {
            return 0;
        }
    }

    /**
     * get the given category base price
     *
     * @return int
     */
    public function getCategoryBasePrice(){
        try {
            $branch = $this->city->branches->first();
            $priceMatrixBranch = $branch->priceMatrixBranches->first();

            if($priceMatrixBranch->pricePerCategories()->exists()){
                $pricePerCategory = $priceMatrixBranch->pricePerCategories()->where('category_id',$this->category->id)->first();
                if($pricePerCategory)
                    return $pricePerCategory->getPrice();

            }

            return $priceMatrixBranch->getPrice($this->category);
        } catch (\Throwable $th) {
            return 0;
        }
    }

    public function getInsuranceDailyPrice(){
        try {
            $insurance_type = $this->insurances_types->firstOrFail(
                fn($insurance) =>
                collect($insurance['categories'])->first(
                    fn($category) => $category == $this->category->identification
                )
            );

            if($insurance_type)
                return $insurance_type['daily_price'] ;
            else
                return 0;
        } catch (\Throwable $th) {
            return 0;
        }

    }
}
