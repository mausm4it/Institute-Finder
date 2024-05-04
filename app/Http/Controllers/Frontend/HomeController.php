<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\College;
use App\Models\Course;
use App\Models\Country;


class HomeController extends Controller
{
    public function index(){
       
            $categories = Category::all();
            $sub_categories = SubCategory::all();
            $courses = Course::all();
            $countries = Country::all();
            $top_colleges = College::where('publish', 1)
            ->orderBy('views', 'desc')
            ->take(9)
            ->latest()
            ->get();

            $colleges = College::where('publish', 1)
            ->orderBy('views', 'desc')
            ->latest()
            ->paginate(9);

          

            return view('frontend.home', compact('categories', 'courses' , 
            'countries', 'top_colleges', 'sub_categories', 'colleges'));
     
    }

 

}