<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class CategoryModel extends Model
{
    use HasFactory;

    protected $table = "category_models";

    protected $guarded = [];

    /**
     * Get the category parent
     *
     * @return * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::deleted(function ($categoryModel){
            Storage::delete($categoryModel->image);
        });
    }
}
