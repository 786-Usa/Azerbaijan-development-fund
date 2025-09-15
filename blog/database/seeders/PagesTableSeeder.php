<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Page; // ✅ make sure you import your Page model

class PagesTableSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            [
                'title' => 'What We Do',
                'slug' => Str::slug('What We Do'),
                'summary' => 'Providing insights and services in investments, strategy, and financial solutions.',
            ],
            [
                'title' => 'Insights',
                'slug' => Str::slug('Insights'),
                'summary' => 'Latest articles, analysis, and thought leadership from our experts.',
            ],
            [
                'title' => 'Our Firm',
                'slug' => Str::slug('Our Firm'),
                'summary' => 'Learn more about our history, mission, and leadership.',
            ],
            [
                'title' => 'Careers',
                'slug' => Str::slug('investor relation'), // will become "investor-relation"
                'summary' => 'Explore career opportunities and join our global team.',
            ],
        ];

        foreach ($pages as $page) {
            Page::updateOrCreate(
                ['slug' => $page['slug']], // condition to check
                [  // values to insert/update
                    'title' => $page['title'],
                    'summary' => $page['summary'],
                ]
            );
        }
    }
}
