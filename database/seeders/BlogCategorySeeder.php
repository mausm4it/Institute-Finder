<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogCategory;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $blog_category = new BlogCategory();
        $blog_category->id = "1";
        $blog_category->name = "Engineering";
        $blog_category->slug = "engineering";
        $blog_category->save();

        $blog_category = new BlogCategory();
        $blog_category->id = "2";
        $blog_category->name = "Business Studies";
        $blog_category->slug = "business-studies";
        $blog_category->save();

        $blog_category = new BlogCategory();
        $blog_category->id = "3";
        $blog_category->name = "Arts";
        $blog_category->slug = "arts";
        $blog_category->save();
    }
}
