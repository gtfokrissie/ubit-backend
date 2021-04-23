<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassPrivate extends Model
{
    use SoftDeletes;

    protected $table = 'class_private';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'class_name',
        'slug',
        'price',
        'meet',
        'status'
    ];

    // Has Many Function

    public function classPrivateReview()
    {
        return $this->hasMany(ClassPrivateReview::class, 'class_private_id');
    }

    public function classPrivateOrderDetail()
    {
        return $this->hasMany(ClassPrivateOrderDetail::class, 'class_private_id');
    }

    // End Has Many Function

    // BelongsTo Function

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
    // End BelongsTo Function
}
