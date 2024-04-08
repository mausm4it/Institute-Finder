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
        Schema::create('college_type_of_college', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('college_id');
            $table->unsignedBiginteger('type_of_college_id');


            $table->foreign('college_id')->references('id')
                 ->on('colleges')->onDelete('cascade');
            $table->foreign('type_of_college_id')->references('id')
                ->on('type_of_colleges')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('college_type_of_college');
    }
};
