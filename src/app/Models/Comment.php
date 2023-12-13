<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Commentクラス
 * 
 * @property string $body コメントの本文
 * 
 * @property-read \App\Models\Post $post コメントが属する投稿
 */
class Comment extends Model
{
    use HasFactory;

    /**
     * @var array $fillable モデルに代入
     */
    protected $fillable = [
        'body',
    ];

    /**
     * 投稿を取得
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}