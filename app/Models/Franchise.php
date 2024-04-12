<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'ad'    =>  AsArrayObject::class,
        'carousel'    =>  AsArrayObject::class,
    ];

    /**
     * Get the pages related to a city
     */
    public function cityPages()
    {
        return $this->hasMany(CityPage::class);
    }
}
