<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
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
        $this->call([
            TagSeeder::class,
            BlogCategorySeeder::class,
        ]);

        User::factory()
            ->count(5)
            ->has(
                Blog::factory()
                    ->count(5)
                    ->has(Comment::factory()->count(2), 'comments'),
                'blogs'
            )
            ->create()
            ->each(function ($user) {
                foreach ($user->blogs as $blog) {
                    // Assign a random tag
                    $tag = Tag::inRandomOrder()->first();
                    $blog->tag()->associate($tag);
                    $blog->save();

                    // Attach 3 random categories
                    $categoryIds = Category::inRandomOrder()->limit(3)->pluck('id');
                    $blog->categories()->sync($categoryIds);
                }
            });
    }
}
