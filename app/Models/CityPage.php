<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityPage extends Model
{
    use HasFactory;

    protected $table = "city_pages";
    protected $guarded = [];
    public $timestamps = false;

    /**
     * Get the related city
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function franchise()
    {
        return $this->belongsTo(Franchise::class);
    }
}
