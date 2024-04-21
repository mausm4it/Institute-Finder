<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeOfCollege;

class TypeOfCollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           $type_of_college = new TypeOfCollege();
        $type_of_college->id = "1";
        $type_of_college->name = "Private";
        $type_of_college->slug = "private";
        $type_of_college->save();

        $type_of_college = new TypeOfCollege();
        $type_of_college->id = "2";
        $type_of_college->name = "Goverment";
        $type_of_college->slug = "goverment";
        $type_of_college->save();
    }
}
