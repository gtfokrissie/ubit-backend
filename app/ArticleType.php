<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleType extends Model
{
    use SoftDeletes;

    protected $table = 'article_type';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name'
    ];

    public function article()
    {
        return $this->hasMany(Article::class, 'article_type_id');
    }
}
