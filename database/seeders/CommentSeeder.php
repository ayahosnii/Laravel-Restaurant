<?php

namespace Database\Seeders;

use App\Models\CategoryBlog;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'body' => 'some comments to show in comments section',
            'user_id' => 1,
            'post_id' => 1,
        ]);
         Comment::create([
            'body' => 'some comments to show in comments section',
            'user_id' => 1,
            'post_id' => 2,
        ]);
         Comment::create([
            'body' => 'some comments to show in comments section',
            'user_id' => 1,
            'post_id' => 3,
        ]);

    }
}
