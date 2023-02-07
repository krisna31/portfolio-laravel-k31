<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Local;
use App\Models\LocalProject;
use App\Models\LocalSocialMedia;
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
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Local::factory()->create([
            'slug' => 'en',
            'landing_text' => 'Landing Text',
            'intro_text' => 'Intro Text',
            'contact_me_text' => 'Contact Me Text',
            'contact_me_link' => 'Contact Me Link',
            'bio_title' => 'Bio Title',
            'bio_body' => 'Bio Body',
            'project_title' => 'Project Title',
            'qoute_text' => 'Qoute Text',
            'quote_name' => 'Quote Name',
            'social_text' => 'Social Text',
            'footer' => 'Footer',
        ]);

        Local::factory()->create([
            'slug' => 'id',
            'landing_text' => 'Landing Text',
            'intro_text' => 'Intro Text',
            'contact_me_text' => 'Contact Me Text',
            'contact_me_link' => 'Contact Me Link',
            'bio_title' => 'Bio Title',
            'bio_body' => 'Bio Body',
            'project_title' => 'Project Title',
            'qoute_text' => 'Qoute Text',
            'quote_name' => 'Quote Name',
            'social_text' => 'Social Text',
            'footer' => 'Footer',
        ]);

        LocalProject::factory()->create([
            'local_id' => 1,
            'title' => 'Project Title',
            'link_github' => 'Project Link',
            'image' => 'Project Image',
        ]);

        LocalSocialMedia::factory()->create([
            'local_id' => 1,
            'title' => 'Social Media title',
            'link_social_media' => 'Social Media Link',
            'icon' => 'Social Media Icon',
        ]);
    }
}
