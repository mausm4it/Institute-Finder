<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index($slug){
        $page = Page::where('slug', $slug)->firstOrFail();

        return view('frontend.pages.single_page' , compact('page'));
    }
}