<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promo extends Model
{
    use SoftDeletes;

    protected $table = 'promo';

    protected $primaryKey = 'id';

    protected $fillable = [
        'promo_name',
        'promo_code',
        'discount_type',
        'discount_amount',
        'discount_max',
        'active_from',
        'active_until'
    ];

    // HasMany Function

    public function paymentTransaction()
    {
        return $this->hasMany(PaymentTransaction::class, 'promo_id');
    }

    // End HasMany Function
}
