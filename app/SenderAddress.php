<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SenderAddress extends Model
{
    use SoftDeletes;

    protected $table = 'sender_address';

    protected $primaryKey = 'id';

    protected $fillable = [
        'province',
        'province_code',
        'city',
        'city_code',
        'subdistrict',
        'subdistrict_code',
        'address'
    ];

    // Has Many Function

    public function productOrder()
    {
        return $this->hasMany(ProductOrder::class, 'sender_address_id');
    }
}
