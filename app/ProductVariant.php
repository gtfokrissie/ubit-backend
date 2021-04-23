<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductVariant extends Model
{
    use SoftDeletes;

    protected $table = 'product_variant';

    protected $primaryKey = 'id';

    protected $fillable = [
        'product_id',
        'variant_name',
        'slug'
    ];

    // Has Many Function

    public function productDecorative()
    {
        return $this->hasMany(ProductDecorative::class, 'product_variant_id');
    }

    // End Has Many Function

    // BelongsTo Function

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
