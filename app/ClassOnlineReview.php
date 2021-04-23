<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassOnlineReview extends Model
{
    use SoftDeletes;

    protected $table = 'class_online_review';

    protected $primaryKey = 'id';

    protected $fillable = [
        'class_online_id',
        'user_id',
        'point',
        'comment'
    ];

    // BelongsTo Function

    public function classOnline()
    {
        return $this->belongsTo(ClassOnline::class, 'class_online_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // End BelongsTo Function
}
