<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassPrivateOrder extends Model
{
    use SoftDeletes;

    protected $table = 'class_private_order';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'order_id',
        'total',
        'status',
        'date_order'
    ];

    // Has Many Function

    public function classPrivateOrderDetail()
    {
        return $this->hasMany(ClassPrivateOrderDetail::class, 'class_private_order_id');
    }

    // End Has Many Function

    // BelongsTo Function

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function paymentTransaction()
    {
        return $this->belongsTo(PaymentTransaction::class, 'order_id', 'order_id');
    }
    
    // End BelongsTo Function
}
