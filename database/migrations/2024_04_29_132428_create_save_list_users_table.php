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
        Schema::create('save_list_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('save_list_id');
            $table->unsignedBiginteger('user_id');
         
            
            

            
            $table->foreign('save_list_id')->references('id')
            ->on('save_lists')->onDelete('cascade');
            $table->foreign('user_id')->references('id')
            ->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('save_list_users');
    }
};