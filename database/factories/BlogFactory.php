<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence;

        return [
            'title' => $title,
            'content' => $this->faker->paragraphs(5, true),
            'slug' => Str::slug($title),
            'estimated_read_time' => $this->faker->numberBetween(2, 10),
            'author_id' => User::factory(),
            'tag_id' => Tag::all()->random(),
        ];
    }
}
