<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryMonthPrice extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'init_date' => 'date:d-m-Y',
        'end_date' => 'date:d-m-Y',
    ];

    /**
     * get category for this category month price
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
