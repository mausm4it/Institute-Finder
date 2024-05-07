<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Advertisement;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Advertisement::create([
            'banner' => "<iframe src='https://example.com/your-ad' width='300' height='250' frameborder='0'scrolling='no'></iframe>",
           'box' => "<iframe src='https://example.com/your-ad' width='80' height='80' frameborder='0'scrolling='no'></iframe>",
            
        ]);
    }
}