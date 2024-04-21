<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\College;
use App\Models\Course;
use App\Models\Country;


class HomeController extends Controller
{
    public function index(){
       
            $categories = Category::all();
            $courses = Course::all();
            $countries = Country::all();
            $colleges = College::all();

          

            return view('frontend.home', compact('categories', 'courses' , 
            'countries', 'colleges'));
     
    }

 

}
