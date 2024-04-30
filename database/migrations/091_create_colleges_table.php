<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{

    public function up(): void
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('summary');
            $table->string('video_link')->nullable();
            $table->longText('about_college');
            $table->longText('admisstion_current_time')->nullable();
            $table->longText('schollership')->nullable();
            $table->longText('faculty')->nullable();
            $table->longText('hostel')->nullable();
            $table->string('thumbline');
            $table->string('gallery')->nullable();
            $table->string('brochuri')->nullable(); 
            $table->longText('placement')->nullable();
            $table->string('ranking_number')->nullable();
            $table->string('type_of_college_id')->default(1);
            $table->integer('views')->default(0);
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->integer('publish')->default(0);
            $table->timestamps();
        });

       


    }

    public function down(): void
    {
        Schema::dropIfExists('colleges');
    }
};