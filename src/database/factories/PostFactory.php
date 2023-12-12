<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/** PostFactory クラス */
class PostFactory extends Factory
{
    /** @var string 投稿 */
    protected $model = Post::class;

    /**
     * 投稿を生成
     *
     * @return array 生成した投稿のタイトル、本文
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
        ];
    }
}
