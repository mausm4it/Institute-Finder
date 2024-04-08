<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;

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
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->longText('about')->nullable();
            $table->string('email')->nullable();
            // $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();


            $table->timestamps();
        });
        $settings = new Setting();
        $settings->icon = asset('public/assets/images/favicon.svg');
        $settings->logo = asset('public/assets/images/logo.svg');
        $settings->name = "College Listing";
        $settings->about = "How Many College in Bangladesh";
        $settings->address = "134, Khonikaloy, Sabujbag 4th Len, Patuakhali sadar, Patuakhali";
        $settings->email = "masum4it@gmail.com";
        $settings->phone = "+880 17898 08879";
        $settings->meta_keywords = "college listing, universities, higher education, academic programs, campus life, faculty, student resources, admissions, college search, higher ed institutions";
        $settings->meta_description = "Discover top colleges and universities around the world. Compare programs, faculty, campus life, and more to find the perfect fit for your academic and career goals.";
        
       
        $settings->save();

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
