<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;

class BlogController extends Controller
{
   public function index(){
    $blogs = Blog::all();
    return view('admin.blogs.index', compact('blogs'));
   }
   public function CreateBlog(){
      $blogs = Blog::all();
      return view('admin.blogs.create');
     }


   public function category(){
    $categories = BlogCategory::all();
    return view('admin.blogs.category', compact('categories'));
   }

   public function CreateCategory(Request $request){
      $category = new BlogCategory();

      $category->name = $request->name;
      $category->slug = $request->slug;
      $category->save();

      return redirect()->back()->with('success', 'CATEGORY CREATED SUCCESSFULY');

      
  }


  public function UpdateCategory(Request $request , $id){
   $category =  BlogCategory::find($id);


    $category->name = $request->name;
    $category->slug = $request->slug;
    $category->save();

    return redirect()->back()->with('success', 'CATEGORY UPDATED SUCCESSFULY');

    
}

public function DeteleCategory($id){
    $category = BlogCategory::find($id);
    $category->delete();

     return redirect()->back()->with('warning', 'CATEGORY DELETED SUCCESSFULY');

    
 }
}
