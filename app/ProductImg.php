<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductImg extends Model
{
    use SoftDeletes;

    protected $table = 'product_img';

    protected $primaryKey = 'id';

    protected $fillable = [
        'product_decorative_id',
        'image',
        'default'
    ];

    // BelongsTo Function

    public function productDecorative()
    {
        return $this->belongsTo(ProductDecorative::class, 'product_decorative_id', 'id');
    }
}
