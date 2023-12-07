<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Database\Factories\CommentFactory;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        // Posts テーブルのデータを生成
        Post::factory(50)->create()
            ->each(function ($post) {
                // Comments テーブルのデータを生成
                \App\Models\Comment::factory(2)->create(['post_id' => $post->id]);
            });
    }
}
