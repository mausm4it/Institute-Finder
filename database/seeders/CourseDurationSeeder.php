<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CourseDuration;
class CourseDurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $course_duration = new CourseDuration();
        $course_duration->id = "1";
        $course_duration->name = "4 Year";
        $course_duration->slug = "4-year";
        $course_duration->save();

        $course_duration = new CourseDuration();
        $course_duration->id = "2";
        $course_duration->name = "3 Year";
        $course_duration->slug = "3-year";
        $course_duration->save();


        $course_duration = new CourseDuration();
        $course_duration->id = "3";
        $course_duration->name = "2 Year";
        $course_duration->slug = "2-year";
        $course_duration->save();

        $course_duration = new CourseDuration();
        $course_duration->id = "4";
        $course_duration->name = "1 Year";
        $course_duration->slug = "1-year";
        $course_duration->save();

        $course_duration = new CourseDuration();
        $course_duration->id = "5";
        $course_duration->name = "6 Month";
        $course_duration->slug = "6-month";
        $course_duration->save();

        $course_duration = new CourseDuration();
        $course_duration->id = "6";
        $course_duration->name = "2 Month";
        $course_duration->slug = "2-month";
        $course_duration->save();

        $course_duration = new CourseDuration();
        $course_duration->id = "7";
        $course_duration->name = "1 Month";
        $course_duration->slug = "1-month";
        $course_duration->save();
    }
}
