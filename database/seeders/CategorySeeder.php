<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Category();
        $category->id = "1";
        $category->name = "Engineering";
        $category->slug = "engineering";
        $category->category_icon = "category_icon/engineering.jpg";
        $category->save();

        $category = new Category();
        $category->id = "2";
        $category->name = "Business Studies";
        $category->slug = "business-studies";
        $category->category_icon = "category_icon/business-studies.jpg";
        $category->save();

        $category = new Category();
        $category->id = "3";
        $category->name = "Arts";
        $category->slug = "arts";
        $category->category_icon = "category_icon/arts.jpg";
        $category->save();
    }
}
