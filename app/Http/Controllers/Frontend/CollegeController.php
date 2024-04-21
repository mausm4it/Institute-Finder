<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\College;

class CollegeController extends Controller
{
    public function index($slug){
     $college = College::where('slug', $slug)->firstOrFail();
     return view('frontend.pages.college_details', compact('college'));
    }
}
