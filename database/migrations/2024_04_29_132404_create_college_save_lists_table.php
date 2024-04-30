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
        Schema::create('college_save_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('college_id');
            $table->unsignedBiginteger('save_list_id');
         
            
            

            $table->foreign('college_id')->references('id')
            ->on('colleges')->onDelete('cascade');
            $table->foreign('save_list_id')->references('id')
            ->on('save_lists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('college_save_lists');
    }
};