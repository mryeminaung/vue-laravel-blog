<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Web Development',
            'Mobile Development',
            'Machine Learning',
            'Data Science',
            'DevOps',
            'Cloud Computing',
            'Cybersecurity',
            'Blockchain',
            'Game Development',
            'Software Architecture',
            'Embedded Systems',
            'JavaScript',
            'Python',
            'React',
            'Vue.js',
            'Laravel',
            'Django',
            'Node.js',
            'Kotlin',
            'Flutter',
            'Docker',
            'Tutorials',
            'How-To Guides',
            'Projects',
            'Cheat Sheets',
            'Case Studies',
            'News & Trends',
            'Opinion',
            'Career Advice',
            'Open Source',
            'Productivity Tools',
            'Tools & Resources',
        ];

        foreach ($categories as $name) {
            Category::factory()->create(
                [
                    'name' => $name,
                    'slug' => Str::slug($name)
                ]
            );
        }
    }
}
