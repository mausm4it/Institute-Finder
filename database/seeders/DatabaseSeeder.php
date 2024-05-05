<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      
        $this->call([SettingSeeder::class]);
        $this->call([RolePermissionSeeder::class]);
        $this->call([AdminSeeder::class]);
        $this->call([CategorySeeder::class]);
        $this->call([SubCategorySeeder::class]);
        $this->call([CampusSeeder::class]);
        $this->call([CourseDurationSeeder::class]);
        $this->call([TypeOfCollegeSeeder::class]);
        $this->call([CourseSeedeer::class]);
        $this->call([CountryStateCityTableSeeder::class]);
        $this->call([BlogCategorySeeder::class]);
        $this->call([BlogSeeder::class]);
        $this->call([CollegeSeeder::class]);
        $this->call([PageSeeder::class]);
        $this->call([SMTPMailSeeder::class]);
        $this->call([CourseFeeSeeder::class]);
        $this->call([UserSeeder::class]);
        $this->call([ReviewSeeder::class]);
        
        
        // $this->call([CountryCampusCourseInstituteCollegeSeeder::class]);
       

        
       
    
    }
}