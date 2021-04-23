<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $table = 'product';

    protected $primaryKey = 'id';

    protected $fillable = [
        'product_category_id',
        'product_type',
        'name',
        'slug',
        'short_description'
    ];

    // Has Many Function

    public function productVariant()
    {
        return $this->hasMany(ProductVariant::class, 'product_id');
    }

    // End Has Many Function

    // BelongsTo Function

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }

    public function productType()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id', 'id');
    }
}
