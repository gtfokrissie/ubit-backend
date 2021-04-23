<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassOfflineOrderDetail extends Model
{
    use SoftDeletes;

    protected $table = 'class_offline_order_detail';

    protected $primaryKey = 'id';

    protected $fillable = [
        'class_offline_order_id',
        'class_offline_id',
        'total_student',
        'date_visit',
        'total'
    ];

    // BelongsTo Function

    public function classOfflineOrder()
    {
        return $this->belongsTo(ClassOfflineOrder::class, 'class_offline_order_id', 'id');
    }

    public function classOffline()
    {
        return $this->belongsTo(ClassOffline::class, 'class_offline_id', 'id');
    }
    
    // End BelongsTo Function
}
