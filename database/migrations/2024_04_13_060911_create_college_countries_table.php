<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\CollegeCountry;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('college_country', function (Blueprint $table) {
            $table->id();
           
            $table->unsignedBiginteger('college_id');
            $table->unsignedBiginteger('country_id');
            

           
            


           
           
            $table->foreign('college_id')->references('id')
            ->on('colleges')->onDelete('cascade');
            $table->foreign('country_id')->references('id')
            ->on('countries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('college_countries');
    }
};
