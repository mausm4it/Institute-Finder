<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Campus;

class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $campus = new Campus();
        $campus->id = "1";
        $campus->name = "Amedabad";
        $campus->slug = "amedabad";
        $campus->save();

        $campus = new Campus();
        $campus->id = "2";
        $campus->name = "Pani Path";
        $campus->slug = "pani-path";
        $campus->save();

        $campus = new Campus();
        $campus->id = "3";
        $campus->name = "Ladak";
        $campus->slug = "ladak";
        $campus->save();

        $campus = new Campus();
        $campus->id = "4";
        $campus->name = "Kashmir";
        $campus->slug = "kashmir";
        $campus->save();

        $campus = new Campus();
        $campus->id = "5";
        $campus->name = "Asam";
        $campus->slug = "asam";
        $campus->save();
    }
}
