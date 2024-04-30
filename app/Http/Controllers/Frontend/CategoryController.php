<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\College;
use App\Models\Course;

class CategoryController extends Controller
{
    public function index($slug){
        $category = Category::where('slug', $slug)->firstOrFail();
        $colleges = College::where('publish' , 1)->paginate(9);

        return view('frontend.pages.single_category', compact('category', 'colleges'));
    }



    public function SubCategory($slug){
        $sub_category = SubCategory::where('slug', $slug)->firstOrFail();
        $colleges = College::where('publish' , 1)->paginate(9);

        return view('frontend.pages.single_sub_category', compact('sub_category', 'colleges'));
    }


    public function Course($slug){
        $course = Course::where('slug', $slug)->firstOrFail();
        

        
      
            $colleges =   $course->colleges()->where('publish' , 1)->paginate(9);
      
        

        return view('frontend.pages.single_course', compact('course' , 'colleges'));
    }
}