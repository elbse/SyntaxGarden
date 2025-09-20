<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $languages = [
            ['name' => 'PHP', 'description' => 'Backend scripting language'],
            ['name' => 'Python', 'description' => 'General-purpose language'],
            ['name' => 'JavaScript', 'description' => 'Web development language'],
        ];

        foreach ($languages as $lang) {
            \App\Models\Language::create($lang);
        }
    }
}
