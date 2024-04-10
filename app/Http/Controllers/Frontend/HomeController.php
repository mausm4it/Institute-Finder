<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\College;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::latest()->get();
        // $mostPopulerCollege = College::orderBy('views' , 'desc')->get();
        return view('frontend.home', compact('categories'));
    }
}
