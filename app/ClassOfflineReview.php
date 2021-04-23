<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassOfflineReview extends Model
{
    use SoftDeletes;

    protected $table = 'class_offline_review';

    protected $primaryKey = 'id';

    protected $fillable = [
        'class_offline_id',
        'user_id',
        'point',
        'comment'
    ];

    // BelongsTo Function

    public function classOffline()
    {
        return $this->belongsTo(ClassOffline::class, 'class_offline_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
    // End BelongsTo Function
}
