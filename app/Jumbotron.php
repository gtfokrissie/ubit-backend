<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jumbotron extends Model
{
    use SoftDeletes;

    protected $table = 'jumbotron';

    protected $primaryKey = 'id';

    protected $fillable = [
        'image_url',
        'tagline',
        'sub_tagline'
    ];
}
