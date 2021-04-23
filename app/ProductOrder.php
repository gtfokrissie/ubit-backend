<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductOrder extends Model
{
    use SoftDeletes;

    protected $table = 'product_order';

    protected $primaryKey = 'id';

    protected $fillable = [
        'sender_address_id',
        'user_id',
        'order_id',
        'province',
        'city',
        'subdistrict',
        'address',
        'note',
        'shipping_charge',
        'amount',
        'weight',
        'total',
        'no_resie',
        'status'
    ];

    // BelongsTo Function

    public function senderAddress()
    {
        return $this->belongsTo(SenderAddress::class, 'sender_address_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function paymentTransaction()
    {
        return $this->belongsTo(PaymentTransaction::class, 'order_id', 'order_id');
    }
}
