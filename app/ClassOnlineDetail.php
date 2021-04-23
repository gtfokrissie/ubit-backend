<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassOnlineDetail extends Model
{
    use SoftDeletes;

    protected $table = 'class_online_detail';

    protected $primaryKey = 'id';

    protected $fillable = [
        'class_online_id',
        'number',
        'name_in_tab',
        'link_video',
        'title_video',
        'short_description',
        'video_duration'
    ];

    // BelongsTo Function

    public function classOnline()
    {
        return $this->belongsTo(ClassOnline::class, 'class_online_id', 'id');
    }

    // End BelongsTo Function
}
