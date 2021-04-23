<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventContent extends Model
{
    use SoftDeletes;

    protected $table = 'event_content';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
