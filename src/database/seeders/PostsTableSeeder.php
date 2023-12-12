<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Database\Factories\CommentFactory;

/**
 * PostsTableSeeder クラス
 * 
 * データベースのシーディングを行うためのクラスです。
 * Posts テーブルとそれに関連する Comments テーブルのデータを生成します。
 */
class PostsTableSeeder extends Seeder
{
    /**
     * run メソッド
     * 
     * このメソッドはシーディングを実行します。
     * まず、Posts テーブルに50件のデータを生成し、
     * その後、各投稿に対して2件のコメントを生成します。
     */
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