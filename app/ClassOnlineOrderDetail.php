<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassOnlineOrderDetail extends Model
{
    use SoftDeletes;

    protected $table = 'class_online_order_detail';

    protected $primaryKey = 'id';

    protected $fillable = [
        'class_online_order_id',
        'class_online_id',
        'total'
    ];

    // BelongsTo Function

    public function classOnlineOrder()
    {
        return $this->belongsTo(ClassOnlineOrder::class, 'class_online_order_id', 'id');
    }

    public function classOnline()
    {
        return $this->belongsTo(ClassOnline::class, 'class_online_id', 'id');
    }

    // End BelongsTo Function
}
