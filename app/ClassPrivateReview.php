<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassPrivateReview extends Model
{
    use SoftDeletes;

    protected $table = 'class_private_review';

    protected $primaryKey = 'id';

    protected $fillable = [
        'class_private_id',
        'user_id',
        'point',
        'comment'
    ];

    // BelongsTo Function

    public function classPrivate()
    {
        return $this->belongsTo(ClassPrivate::class, 'class_private_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
    // End BelongsTo Function
}
