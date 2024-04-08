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
        Schema::create('colleges', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('summary')->nullable();
            // $table->integer('course_id');
            // $table->integer('course_duration_id');
            // $table->integer('category_id');
            //$table->integer('city_id');
            // $table->integer('tyoe_of_college_id');
            // $table->string('credit')->nullable();
            // $table->string('semester')->nullable();
            // $table->string('program_type')->nullable();
            $table->string('video_link')->nullable();
            $table->longText('about_college')->nullable();
            $table->longText('admisstion_current_time')->nullable();
            $table->longText('schollership')->nullable();
            $table->longText('faculty')->nullable();
            $table->longText('hostel')->nullable();
            $table->string('thumbline')->nullable();
            $table->string('gallery')->nullable();
            $table->string('brochuri')->nullable();
            $table->longText('placement')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();


            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colleges');
    }
};
