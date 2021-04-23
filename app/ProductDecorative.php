<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductDecorative extends Model
{
    use SoftDeletes;

    protected $table = 'product_decorative';

    protected $primaryKey = 'id';

    protected $fillable = [
        'product_variant_id',
        'name',
        'slug',
        'number',
        'price',
        'stock',
        'weight',
        'pre_order',
        'pre_order_time',
        'description'
    ];

    // Has Many Function

    public function productImg()
    {
        return $this->hasMany(ProductImg::class, 'product_decorative_id');
    }

    // End Has Many Function

    // BelongsTo Function

    public function productVariant()
    {
        return $this->belongsTo(ProductVariant::class, 'product_variant_id', 'id');
    }
}
