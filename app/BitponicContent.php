<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BitponicContent extends Model
{
    use SoftDeletes;

    protected $table = 'bitponic_content';

    protected $primaryKey = 'id';

    protected $fillable = [
        'product_category_id',
        'image',
        'icon',
        'short_content',
        'content'
    ];

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }
}
