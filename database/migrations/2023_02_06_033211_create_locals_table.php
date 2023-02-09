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
            $table->string('slug')->unique();
            $table->text('landing_text')->default('Landing Text');
            $table->text('landing_body')->default('Landing Body');
            $table->text('intro_text')->default('Intro Text');
            $table->text('contact_me_text')->default('Contact Me Text');
            $table->string('contact_me_link')->default('Contact Me Link');
            $table->string('bio_title')->default('Bio Title');
            $table->string('bio_body')->default('Bio Body');
            $table->string('project_title')->default('Project title');
            $table->text('qoute_text')->default('Qoute Text');
            $table->string('quote_name')->default('Quote Name');
            $table->text('social_text')->default('Social Text');
            $table->string('footer')->default("footer | 2023");
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
