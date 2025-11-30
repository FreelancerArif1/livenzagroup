<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('baner_title')->nullable();
            $table->string('baner_description')->nullable();
            $table->string('baner_image')->nullable();
            $table->string('baner_video')->nullable();


            $table->string('story_title')->nullable();
            $table->string('story_description')->nullable();
            $table->string('story_image')->nullable();
            $table->string('story_background')->nullable();
            $table->string('story_video')->nullable();


            $table->string('mission_title')->nullable();
            $table->string('mission_description')->nullable();
            $table->string('mission_image')->nullable();
            $table->string('mission_background')->nullable();
            $table->string('mission_video')->nullable();

            $table->string('vision_title')->nullable();
            $table->string('vision_description')->nullable();
            $table->string('vision_image')->nullable();
            $table->string('vision_background')->nullable();
            $table->string('vision_video')->nullable();

            $table->string('values_title')->nullable();
            $table->string('values_description')->nullable();
            $table->string('values_image')->nullable();
            $table->string('values_background')->nullable();
            $table->string('values_video')->nullable();

            $table->string('leadership_title')->nullable();
            $table->string('leadership_description')->nullable();
            $table->string('leadership_image')->nullable();
            $table->string('leadership_background')->nullable();
            $table->string('leadership_video')->nullable();

            $table->unsignedTinyInteger('status')->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
