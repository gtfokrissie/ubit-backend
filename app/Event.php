<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $table = 'event';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'slug',
        'organizer',
        'image',
        'date',
        'time_from',
        'time_until',
        'location',
        'address',
        'description',
        'price',
        'status',
        'link_registration',
        'user_id'
    ];

    // BelongsTo Function

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
    // End BelongsTo Function
}
