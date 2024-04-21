<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubCategory;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sub_category = new SubCategory();
        $sub_category->id = "1";
        $sub_category->name = "Diploma";
        $sub_category->slug = "diploma";
        $sub_category->category_id = "1";
        $sub_category->save();

        $sub_category = new SubCategory();
        $sub_category->id = "2";
        $sub_category->name = "B.Sc";
        $sub_category->slug = "b-sc";
        $sub_category->category_id = "1";
        $sub_category->save();

        $sub_category = new SubCategory();
        $sub_category->id = "3";
        $sub_category->name = "M.Sc";
        $sub_category->slug = "m-sc";
        $sub_category->category_id = "1";
        $sub_category->save();

        $sub_category = new SubCategory();
        $sub_category->id = "4";
        $sub_category->name = "Inter";
        $sub_category->slug = "inter";
        $sub_category->category_id = "2";
        $sub_category->save();

        $sub_category->id = "5";
        $sub_category->name = "BBA";
        $sub_category->slug = "bba";
        $sub_category->category_id = "2";
        $sub_category->save();

        $sub_category->id = "6";
        $sub_category->name = "MBA";
        $sub_category->slug = "mba";
        $sub_category->category_id = "2";
        $sub_category->save();

        
        $sub_category->id = "7";
        $sub_category->name = "Inter";
        $sub_category->slug = "inter-arts";
        $sub_category->category_id = "3";
        $sub_category->save();

    }
}
