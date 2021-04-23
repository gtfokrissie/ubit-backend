<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentTransaction extends Model
{
    use SoftDeletes;

    protected $table = 'payment_transaction';

    protected $primaryKey = 'id';

    protected $fillable = [
        'order_id',
        'payment_master_id',
        'promo_id',
        'total',
        'status_payment',
        'payment_date'
    ];

    // HasMany Function

    public function accessPremiumOrder()
    {
        return $this->hasMany(AccessPremiumOrder::class, 'order_id');
    }

    public function productOrder()
    {
        return $this->hasMany(ProductOrder::class, 'order_id');
    }

    public function classOnlineOrder()
    {
        return $this->hasMany(ClassOnlineOrder::class, 'order_id');
    }

    public function classOfflineOrder()
    {
        return $this->hasMany(ClassOfflineOrder::class, 'order_id');
    }

    public function classPrivateOrder()
    {
        return $this->hasMany(ClassPrivateOrder::class, 'order_id');
    }

    // End HasMany Function

    // Belongs To Function

    public function paymentMaster()
    {
        return $this->belongsTo(PaymentMaster::class, 'payment_master_id', 'id');
    }

    public function promo()
    {
        return $this->belongsTo(Promo::class, 'promo_id', 'id');
    }

    // End Belongs To Function
}
