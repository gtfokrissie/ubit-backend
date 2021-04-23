<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassOffline extends Model
{
    use SoftDeletes;

    protected $table = 'class_offline';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'class_name',
        'slug',
        'price',
        'location',
        'location_img',
        'location_map',
        'max_student',
        'long_study',
        'status'
    ];

    // Has Many Function

    public function classOfflineReview()
    {
        return $this->hasMany(ClassOfflineReview::class, 'class_offline_id');
    }

    public function classOfflineOrderDetail()
    {
        return $this->hasMany(ClassOfflineOrderDetail::class, 'class_offline_id');
    }

    // End Has Many Function

    // BelongsTo Function

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
    // End BelongsTo Function
}
