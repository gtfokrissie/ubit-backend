<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleVisual extends Model
{
    use SoftDeletes;

    protected $table = 'article_visual';

    protected $primaryKey = 'id';

    protected $fillable = [
        'article_id',
        'visual',
        'link_visual',
        'title',
        'number'
    ];

    // Belongs To Function

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id', 'id');
    }

    // End Belongs To Function
}
