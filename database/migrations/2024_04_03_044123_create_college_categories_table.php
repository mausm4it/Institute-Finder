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
        Schema::create('college_categorie', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('college_id');
            $table->unsignedBiginteger('category_id');


            $table->foreign('college_id')->references('id')
                 ->on('colleges')->onDelete('cascade');
            $table->foreign('category_id')->references('id')
                ->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('college_categorie');
    }
};
