<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        for ($i = 0; $i < 999; $i++) {
            $now = Carbon::now()->subDays(rand(0, 30))->subHours(rand(0, 24))->subMinutes(rand(0, 60))->subSeconds(rand(0, 60));
            DB::table('reviews')->insert([
                'user_id' => random_int(5, 14),
                'rating_number' => random_int(1, 5),
                'comment' => Str::random(12),
                'college_id' =>random_int(1, 9),
                'created_at' =>$now,
                'updated_at' =>$now,
            ]);
        }
       
       
       
    }
}