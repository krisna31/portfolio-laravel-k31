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
        Schema::create('local_social_media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('local_id')->constrained('locals')->cascadeOnDelete();
            $table->string('title');
            $table->string('link_social_media');
            $table->string('icon');
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
        Schema::dropIfExists('local_social_media');
    }
};
