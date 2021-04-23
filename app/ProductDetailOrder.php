<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductDetailOrder extends Model
{
    use SoftDeletes;

    protected $table = 'product_detail_order';

    protected $primaryKey = 'id';

    protected $fillable = [
        'product_deorative_id',
        'product_order_id',
        'amount',
        'total'
    ];

    // BelongsTo Function

    public function productDecorative()
    {
        return $this->belongsTo(ProductDecorative::class, 'product_decorative_id', 'id');
    }

    public function productOrder()
    {
        return $this->belongsTo(ProductOrder::class, 'product_order_id', 'id');
    }
}
