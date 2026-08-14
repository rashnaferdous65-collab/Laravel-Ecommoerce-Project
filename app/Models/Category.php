<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Mass assignable attributes.
     *
     * @var array<int, string>
     */
    protected $fillable = ['cat_title'];

    /**
     * Get all products under this category.
     */
    public function products()
    {
        return $this->hasMany(
            Product::class,
            'category_id'
        );
    }
}
