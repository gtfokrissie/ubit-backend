<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use SoftDeletes;

    protected $table = 'product_category';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'slug'
    ];

    // HasMany Function

    public function bitponicContent()
    {
        return $this->hasMany(BitponicContent::class, 'product_category_id');
    }

    public function product()
    {
        return $this->hasMany(Product::class, 'product_category_id');
    }
}
