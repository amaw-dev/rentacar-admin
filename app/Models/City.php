<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = "cities";

    public $timestamps = false;

    protected $guarded = [];

    /**
     * Get the pages related to a city
     */
    public function cityPages()
    {
        return $this->hasMany(CityPage::class);
    }

    /**
     * Get the branches related to a city
     */
    public function branches()
    {
        return $this->hasMany(Branch::class);
    }
}
