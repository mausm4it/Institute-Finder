<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CollegeCountry;
use App\Models\CourseCollege;
use App\Models\CampusCollege;

class CountryCampusCourseInstituteCollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       //country
       
        // $countryCollege = new CollegeCountry();
        // $countryCollege->college_id = "1";
        // $countryCollege->country_id = "1";
        // $countryCollege->save();


        // $countryCollege = new CollegeCountry();
        // $countryCollege->college_id = "2";
        // $countryCollege->country_id = "1";
        // $countryCollege->save();


        // $countryCollege = new CollegeCountry();
        // $countryCollege->college_id = "3";
        // $countryCollege->country_id = "1";
        // $countryCollege->save();


        // $countryCollege = new CollegeCountry();
        // $countryCollege->college_id = "4";
        // $countryCollege->country_id = "1";
        // $countryCollege->save();


        // $countryCollege = new CollegeCountry();
        // $countryCollege->college_id = "5";
        // $countryCollege->country_id = "1";
        // $countryCollege->save();

        // $countryCollege = new CollegeCountry();
        // $countryCollege->college_id = "6";
        // $countryCollege->country_id = "1";
        // $countryCollege->save();

        // $countryCollege = new CollegeCountry();
        // $countryCollege->college_id = "7";
        // $countryCollege->country_id = "1";
        // $countryCollege->save();

        // $countryCollege = new CollegeCountry();
        // $countryCollege->college_id = "8";
        // $countryCollege->country_id = "2";
        // $countryCollege->save();

        // $countryCollege = new CollegeCountry();
        // $countryCollege->college_id = "9";
        // $countryCollege->country_id = "2";
        // $countryCollege->save();

       
        //course

        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 1;
        $courseCollege->college_id = 1;
        $courseCollege->save();

        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 2;
        $courseCollege->college_id = 1;
        $courseCollege->save();

        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 3;
        $courseCollege->college_id = 1;
        $courseCollege->save();


        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 1;
        $courseCollege->college_id = 2;
        $courseCollege->save();

        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 2;
        $courseCollege->college_id = 2;
        $courseCollege->save();

        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 3;
        $courseCollege->college_id = 2;
        $courseCollege->save();


        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 1;
        $courseCollege->college_id = 3;
        $courseCollege->save();

        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 2;
        $courseCollege->college_id = 3;
        $courseCollege->save();

        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 3;
        $courseCollege->college_id = 3;
        $courseCollege->save();


        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 1;
        $courseCollege->college_id = 4;
        $courseCollege->save();

        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 2;
        $courseCollege->college_id = 4;
        $courseCollege->save();

        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 3;
        $courseCollege->college_id = 4;
        $courseCollege->save();



        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 1;
        $courseCollege->college_id = 5;
        $courseCollege->save();

        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 2;
        $courseCollege->college_id = 5;
        $courseCollege->save();

        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 3;
        $courseCollege->college_id = 5;
        $courseCollege->save();



        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 1;
        $courseCollege->college_id = 6;
        $courseCollege->save();

        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 2;
        $courseCollege->college_id = 6;
        $courseCollege->save();

        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 3;
        $courseCollege->college_id = 6;
        $courseCollege->save();                             




        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 1;
        $courseCollege->college_id = 7;
        $courseCollege->save();

        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 2;
        $courseCollege->college_id = 7;
        $courseCollege->save();

        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 3;
        $courseCollege->college_id = 7;
        $courseCollege->save();



        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 1;
        $courseCollege->college_id = 8;
        $courseCollege->save();

        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 2;
        $courseCollege->college_id = 8;
        $courseCollege->save();

        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 3;
        $courseCollege->college_id = 8;
        $courseCollege->save();


        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 1;
        $courseCollege->college_id = 9;
        $courseCollege->save();

        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 2;
        $courseCollege->college_id = 9;
        $courseCollege->save();

        $courseCollege = new CourseCollege();
        $courseCollege->course_id = 3;
        $courseCollege->college_id = 9;
        $courseCollege->save();


        //campus
        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 1;
        $campusCollege->college_id = 1;
        $campusCollege->save();

        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 2;
        $campusCollege->college_id = 1;
        $campusCollege->save();

        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 3;
        $campusCollege->college_id = 2;
        $campusCollege->save();

        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 5;
        $campusCollege->college_id = 2;
        $campusCollege->save();

        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 4;
        $campusCollege->college_id = 2;
        $campusCollege->save();


        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 1;
        $campusCollege->college_id = 3;
        $campusCollege->save();

        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 2;
        $campusCollege->college_id = 3;
        $campusCollege->save();

        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 3;
        $campusCollege->college_id = 3;
        $campusCollege->save();

        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 5;
        $campusCollege->college_id = 4;
        $campusCollege->save();

        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 4;
        $campusCollege->college_id = 4;
        $campusCollege->save();


        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 1;
        $campusCollege->college_id = 5;
        $campusCollege->save();

        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 2;
        $campusCollege->college_id = 5;
        $campusCollege->save();

        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 3;
        $campusCollege->college_id = 5;
        $campusCollege->save();

        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 5;
        $campusCollege->college_id = 5;
        $campusCollege->save();

        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 4;
        $campusCollege->college_id = 6;
        $campusCollege->save();


        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 1;
        $campusCollege->college_id = 7;
        $campusCollege->save();

        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 2;
        $campusCollege->college_id = 7;
        $campusCollege->save();

        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 3;
        $campusCollege->college_id = 8;
        $campusCollege->save();

        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 5;
        $campusCollege->college_id = 8;
        $campusCollege->save();

        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 4;
        $campusCollege->college_id = 8;
        $campusCollege->save();

        $campusCollege = new CampusCollege();
        $campusCollege->campus_id = 4;
        $campusCollege->college_id = 9;
        $campusCollege->save();
        
        
    }
}
