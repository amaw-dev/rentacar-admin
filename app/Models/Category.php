<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "categories";

    protected $guarded = [];


    /**
     * get models for a category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function models()
    {
        return $this->hasMany(CategoryModel::class, 'category_id');
    }

    /**
     * get month prices for a category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function monthPrices()
    {
        return $this->hasMany(CategoryMonthPrice::class, 'category_id');
    }
}
