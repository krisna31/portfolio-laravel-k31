<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Local;
use App\Models\LocalProject;
use App\Models\LocalSocialMedia;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => str()->random(10),
        ]);

        Local::factory()->create([
            'slug' => 'default',
            'landing_text' => 'Jelvin Krisna Putra - Student',
            'landing_body' => 'My Portfolio',
            'intro_text' => "I was born in 2003, now i'm student of University Multi Data Palembang",
            'contact_me_text' => "Contact Me",
            'contact_me_link' => '#socmed',
            'bio_title' => '📜 Biography 📜',
            'bio_body' => "Hello, I'm Jelvin Krisna Putra i was born at Palembang city in 2003, my interest with coding and technology started at young age, and has become my life-long love. On this website you will discover some of my simple projects that created with my main languange Javascript, after year i was learn about basic of html, css, and Javascript i then step further to learn React, SQL, and many other technology. Until now i have many skills which are Html, Css, Js, Java, Git, Github for framework i can React, Tailwind, Bootstrap, For the backend i understand Firebase.",
            'project_title' => '🚀 My Projects 🚀',
            'quote_text' => "Programming isn't about what you know; it's about what you can figure out.",
            'quote_name' => 'Chris Pine',
            'social_text' => 'Social Media',
            'footer' => '@2023 | K31 | Laravel Tailwind DaisyUi',
        ]);

        Project::factory()->create([
            'local_id' => 1,
            'title' => 'Simple Notes Management (CRUD App, React, Typescript, Tailwind, Firebase)',
            'link_github' => 'https://github.com/krisna31/sinodes-tailwind',
            'image' => '1.jpg',
        ]);

        Project::factory()->create([
            'local_id' => 1,
            'title' => 'Website That Use Space-x API',
            'link_github' => 'https://github.com/krisna31/space-x-api',
            'image' => '2.jpg',
        ]);

        Project::factory()->create([
            'local_id' => 1,
            'title' => 'Website Pengenalan Himif (Fullscreen JS)',
            'link_github' => 'https://github.com/krisna31/PengenalanHimif',
            'image' => '3.jpg',
        ]);

        Project::factory()->create([
            'local_id' => 1,
            'title' => 'Website Landing Page With Bootstrap',
            'link_github' => 'https://github.com/krisna31/Landing-profile',
            'image' => '4.jpg',
        ]);
    }
}
