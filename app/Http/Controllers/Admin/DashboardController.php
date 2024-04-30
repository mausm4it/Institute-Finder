<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\College;
use App\Models\Course;
use App\Models\Blog;
use App\Models\User;
use App\Models\Apply;



class DashboardController extends Controller
{
    public function index()
{
    $active_college_count = College::where('publish', 1)->count();
    $lastUpdated_active_college = College::where('publish', 1)->latest('updated_at')->first();
    $lastUpdateDate_active_college = $lastUpdated_active_college ? $lastUpdated_active_college->updated_at : null;

    $inactive_college_count = College::where('publish', 0)->count();
    $lastUpdated_inactive_college = College::where('publish', 0)->latest('updated_at')->first();
    $lastUpdateDate_inactive_college = $lastUpdated_inactive_college ? $lastUpdated_inactive_college->updated_at : null;

    $apply_count = Apply::count();
    $lastUpdated_apply = Apply::latest('updated_at')->first();
    $lastUpdateDate_apply = $lastUpdated_apply ? $lastUpdated_apply->updated_at : null;

    $blog_count = Blog::count();
    $lastUpdated_blog = Blog::latest('updated_at')->first();
    $lastUpdateDate_blog = $lastUpdated_blog ? $lastUpdated_blog->updated_at : null;

    
 

    return view('admin.dashboard', compact(
        'active_college_count',
        'lastUpdateDate_active_college',
        'inactive_college_count',
        'lastUpdateDate_inactive_college',
        'apply_count',
        'lastUpdateDate_apply',
        'blog_count',
        'lastUpdateDate_blog',
      
     
    ));
}

}