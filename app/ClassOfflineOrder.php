<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassOfflineOrder extends Model
{
    use SoftDeletes;

    protected $table = 'class_offline_order';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'order_id',
        'total',
        'date_order',
        'status'
    ];

    // Has Many Function

    public function classOfflineOrderDetail()
    {
        return $this->hasMany(ClassOfflineOrderDetail::class, 'class_offline_order_id');
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
