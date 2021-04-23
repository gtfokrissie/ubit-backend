<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassOnline extends Model
{
    use SoftDeletes;

    protected $table = 'class_online';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'slug',
        'link_intro',
        'total_video',
        'total_video_duration',
        'description',
        'price',
        'status'
    ];

    // Has Many Function

    public function classOnlineDetail()
    {
        return $this->hasMany(ClassOnlineDetail::class, 'class_online_id');
    }

    public function classOnlineReview()
    {
        return $this->hasMany(ClassOnlineReview::class, 'class_online_id');
    }

    public function classOnlineOrderDetail()
    {
        return $this->hasMany(ClassOnlineOrderDetail::class, 'class_online_id');
    }

    // End Has Many Function
}
