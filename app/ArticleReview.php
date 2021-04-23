<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleReview extends Model
{
    use SoftDeletes;

    protected $table = 'article_review';

    protected $primaryKey = 'id';

    protected $fillable = [
        'article_id',
        'user_id',
        'point',
        'comment'
    ];

    // Belongs To Function

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // End Belongs To Function
}
