<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductType extends Model
{
    use SoftDeletes;

    protected $table = 'product_type';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name'
    ];

    // Has Many Function

    public function product()
    {
        return $this->hasMany(Product::class, 'product_type_id');
    }
}
