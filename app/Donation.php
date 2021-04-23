<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donation extends Model
{
    use SoftDeletes;

    protected $table = 'donation';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
        'image'
    ];
}
