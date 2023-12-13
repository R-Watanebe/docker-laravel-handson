<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/** CommentFactory クラス */
class CommentFactory extends Factory
{
    /** @var string コメント */
    protected $model = Comment::class;

    /**
     * コメントを生成
     *
     * @return array 生成したコメント
     */
    public function definition()
    {
        return [
            'body' => "コメントです。テキストテキストテキストテキストテキストテキスト。\nテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。",
        ];
    }
}