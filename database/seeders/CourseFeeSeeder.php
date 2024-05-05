<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CourseFee;
class CourseFeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 1;
        $course_fee->college_id = 1;
        $course_fee->save();


        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 2;
        $course_fee->college_id = 1;
        $course_fee->save();


        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 3;
        $course_fee->college_id = 1;
        $course_fee->save();


        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 1;
        $course_fee->college_id = 2;
        $course_fee->save();


        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 2;
        $course_fee->college_id = 2;
        $course_fee->save();


        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 3;
        $course_fee->college_id = 2;
        $course_fee->save();


        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 1;
        $course_fee->college_id = 3;
        $course_fee->save();


        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 2;
        $course_fee->college_id = 3;
        $course_fee->save();

        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 3;
        $course_fee->college_id = 3;
        $course_fee->save();


        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 1;
        $course_fee->college_id = 4;
        $course_fee->save();

        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 2;
        $course_fee->college_id = 4;
        $course_fee->save();


        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 3;
        $course_fee->college_id = 4;
        $course_fee->save();


        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 1;
        $course_fee->college_id = 5;
        $course_fee->save();


        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 2;
        $course_fee->college_id = 5;
        $course_fee->save();


        
        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 3;
        $course_fee->college_id = 5;
        $course_fee->save();


        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 1;
        $course_fee->college_id = 6;
        $course_fee->save();


        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 2;
        $course_fee->college_id = 6;
        $course_fee->save();


        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 3;
        $course_fee->college_id = 6;
        $course_fee->save();


        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 1;
        $course_fee->college_id = 7;
        $course_fee->save();


        
        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 2;
        $course_fee->college_id = 7;
        $course_fee->save();


        
        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 3;
        $course_fee->college_id = 7;
        $course_fee->save();


        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 1;
        $course_fee->college_id = 8;
        $course_fee->save();


        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 2;
        $course_fee->college_id = 8;
        $course_fee->save();



        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 3;
        $course_fee->college_id = 8;
        $course_fee->save();



        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 1;
        $course_fee->college_id = 9;
        $course_fee->save();


        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 2;
        $course_fee->college_id = 9;
        $course_fee->save();


        $course_fee = new CourseFee();
        $course_fee->amount = random_int(100000, 999999);
        $course_fee->course_id = 3;
        $course_fee->college_id = 9;
        $course_fee->save();



    }
}