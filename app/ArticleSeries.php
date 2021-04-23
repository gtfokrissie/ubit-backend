<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleSeries extends Model
{
    use SoftDeletes;

    protected $table = 'article_series';

    protected $primaryKey = 'id';

    protected $fillable = [
        'article_id',
        'article_id_link',
        'name_series',
        'number'
    ];

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id', 'id');
    }
}
