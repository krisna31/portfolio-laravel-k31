<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locals', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->text('landing_text');
            $table->text('intro_text');
            $table->text('contact_me_text');
            $table->string('contact_me_link');
            $table->string('bio_title');
            $table->string('bio_body');
            $table->string('project_title');
            $table->foreignId('local_projects_id')->constrained('local_projects')->cascadeOnDelete();
            $table->text('qoute_text');
            $table->string('quote_name');
            $table->text('social_text');
            $table->foreignId('local_social_media_id')->constrained('local_social_media')->cascadeOnDelete();
            $table->string('footer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locals');
    }
};
