<?php

namespace Database\Seeders;

use App\Models\CategoryBlog;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' =>"ways to cook Eggs",
            'slug' => Str::slug('ways to cook eggs'),
            'body' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                       Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,
                       remaining essentially unchanged.
                       and more recently with desktop publishing software like Aldus PageMaker
                       including versions of Lorem Ipsum.",

            'image' => 'p1.jpg',
            'user_id' =>1,
            'category_id' =>1,
        ]);
        Post::create([
            'title' =>"How to make pizza",
            'slug' => Str::slug('how to make pizza'),
            'body' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                       Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,
                       remaining essentially unchanged.
                       and more recently with desktop publishing software like Aldus PageMaker
                       including versions of Lorem Ipsum.",

            'image' => 'p2.jpg',
            'user_id' =>1,
            'category_id' =>2,
        ]);
        Post::create([
            'title' =>"Delicious dinners",
            'slug' => Str::slug('delicious dinners'),
            'body' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                       Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,
                       remaining essentially unchanged.
                       and more recently with desktop publishing software like Aldus PageMaker
                       including versions of Lorem Ipsum.",

            'image' => 'p1.jpg',
            'user_id' =>1,
            'category_id' =>3,
        ]);

    }
}
