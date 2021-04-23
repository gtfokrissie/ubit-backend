<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $table = 'article';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'article_category_id',
        'article_type_id',
        'title',
        'slug',
        'short_content',
        'content',
        'status',
        'series',
        'total_point'
    ];

    // Belongs To Function

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function articleCategory()
    {
        return $this->belongsTo(ArticleCategory::class, 'article_category_id', 'id');
    }

    public function articleType()
    {
        return $this->belongsTo(ArticleType::class, 'article_type_id', 'id');
    }

    // End Belongs To Function

    // HasMany Function

    public function articleSeries()
    {
        return $this->hasMany(ArticleSeries::class, 'article_id');
    }

    public function articleVisual()
    {
        return $this->hasMany(ArticleVisual::class, 'article_id');
    }

    // End HasMany Function
}
