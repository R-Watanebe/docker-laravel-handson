<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Postクラス
 * 
 * @property string $title Postのタイトル
 * @property string $body Postの本文
 *  
*/
class Post extends Model
{
    use HasFactory;

    /**
     * 一括代入
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
    ];

    /**
     * 投稿に対するコメントを取得
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
