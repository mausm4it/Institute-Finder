<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    public function index(){
        $blogs= Blog::where('publish', 1)
        ->orderBy('views', 'desc')
        ->latest()
        ->get();
        
        $blogCategories = BlogCategory::all();

        return view( 'frontend.pages.blog.blogs', compact('blogs', 'blogCategories') );
    }



    public function BlogDetails($slug){
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $blog->increment('views');

        return view( 'frontend.pages.blog.blog_details', compact('blog') );
    }


    public function BlogCategory($slug){
        $blog_category = BlogCategory::where('slug', $slug)->firstOrFail();

        return view( 'frontend.pages.blog.blog_category', compact('blog_category') );
    }
}