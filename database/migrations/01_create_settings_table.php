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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->nullable();
            $table->string('logo')->nullable();
            $table->string('home_search_background_image')->nullable();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->longText('about')->nullable();
            $table->string('email')->nullable();
            // $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
     
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
        Schema::dropIfExists('settings');
    }
};