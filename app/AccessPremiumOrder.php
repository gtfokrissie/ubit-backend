<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccessPremiumOrder extends Model
{
    //
    use SoftDeletes;

    protected $table = 'access_premium_order';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'order_id',
        'total',
        'status',
        'active_period',
        'active_from',
        'active_until',
        'order_date'
    ];

    // Belongs To Function

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function paymentTransaction()
    {
        return $this->belongsTo(PaymentTransaction::class, 'order_id', 'order_id');
    }
}
