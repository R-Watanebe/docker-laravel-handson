<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

/** データベースシーダー */
class DatabaseSeeder extends Seeder
{
    /**
     * データベースをシード
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostsTableSeeder::class);
    }
}
