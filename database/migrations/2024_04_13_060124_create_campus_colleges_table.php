<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\CampusCollege;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('campus_college', function (Blueprint $table) {
            $table->id();
           
            $table->unsignedBiginteger('campus_id');
            $table->unsignedBiginteger('college_id');
       
        

          
           
            $table->foreign('campus_id')->references('id')
                 ->on('campuses')->onDelete('cascade');
            $table->foreign('college_id')->references('id')
                 ->on('colleges')->onDelete('cascade');
        });

       

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campus_colleges');
    }
};
