<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassPrivateOrderDetail extends Model
{
    use SoftDeletes;

    protected $table = 'class_private_order_detail';

    protected $primaryKey = 'id';

    protected $fillable = [
        'class_private_order_id',
        'class_private_id',
        'total'
    ];

    // BelongsTo Function

    public function classPrivateOrder()
    {
        return $this->belongsTo(ClassPrivateOrder::class, 'class_private_order_id', 'id');
    }

    public function classPrivate()
    {
        return $this->belongsTo(ClassPrivate::class, 'class_private_id', 'id');
    }
    
    // End BelongsTo Function
}
