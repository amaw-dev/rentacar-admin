<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $table = "branches";

    protected $guarded = [];

    public $timestamps = false;

    /**
     * Get the related city
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

}
