<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\CourseCollege;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('course_college', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('course_id');
            $table->unsignedBiginteger('college_id');
         
            


            $table->foreign('course_id')->references('id')
            ->on('courses')->onDelete('cascade');
            $table->foreign('college_id')->references('id')
                 ->on('colleges')->onDelete('cascade');
        });

       

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_colleges');
    }
};
