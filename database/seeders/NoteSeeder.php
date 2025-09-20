<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $php = \App\Models\Language::where('name', 'PHP')->first();

        $php->notes()->create([
            'title' => 'Laravel Basics',
            'content' => 'Service containers, service providers, routing...'
        ]);

        $php->notes()->create([
            'title' => 'Composer',
            'content' => 'Dependency management tool used with PHP projects.'
        ]);
    }
}
