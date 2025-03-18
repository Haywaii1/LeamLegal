<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Illuminate\Support\Carbon;

class BlogSeeder extends Seeder
{
    public function run()
    {
        Blog::insert([
            [
                'title' => 'Understanding Civil Law',
                'category' => 'Civil Law',
                'image' => 'img/blog-1.jpg',
                'published_at' => Carbon::parse('2024-03-15'),
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Criminal Law Basics',
                'category' => 'Criminal Law',
                'image' => 'img/blog-2.jpg',
                'published_at' => Carbon::parse('2024-03-10'),
                'content' => 'This article covers the fundamentals of criminal law...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Family Law Explained',
                'category' => 'Family Law',
                'image' => 'img/blog-3.jpg',
                'published_at' => Carbon::parse('2024-02-28'),
                'content' => 'A detailed overview of family law and its importance...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
