<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleCategory extends Model
{
    use SoftDeletes;

    protected $table = 'article_category';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'slug'
    ];

    public function article()
    {
        return $this->hasMany(Article::class, 'article_category_id');
    }
}
