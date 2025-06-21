<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Tag::factory(10)->create();

        User::factory()
            ->count(3)
            ->has(
                Blog::factory()
                    ->count(5)
                    ->has(
                        Comment::factory()->count(3),
                        'comments' // blog()->comments() relationship name
                    ),
                'blogs' // user()->blogs() relationship name
            )
            ->create();
    }
}
