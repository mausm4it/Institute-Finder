<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
   public function index(){
    $blogs = Blog::all();
    $categories = Category::all();
    return view('admin.blogs.index', compact('blogs','categories'));
   }






   public function UpdateBlogView($id){
      $blog =  Blog::find($id);
      $categories = Category::all();
      return view('admin.blogs.update', compact('blog','categories'));
     }





   public function CreateBlog(Request $request){
        
     $request->validate([
        'blog_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
     $blog = new Blog();
     if ($request->hasFile('blog_image')) {
          
        if ($blog->blog_image) {
            Storage::delete($blog->blog_image);
        }

      

        $imagePath = $request->file('blog_image')->storeAs('blog_image', 'blog_image' . now()->format('YmdHis') . '.' . $request->file('blog_image')->getClientOriginalExtension());
        $blog->blog_image = $imagePath;
       
    }

        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->summary = $request->summary;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->meta_description = $request->meta_description;
        $blog->content = $request->input('content');
        $blog->category_id = $request->category_id;
      
        $blog->save();
      
        return redirect()->back()->with('success', 'BLOG CREATED SUCCESSFULY');
       
       }

       public function UpdateBlog(Request $request, $id){
        
        $request->validate([
           'blog_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
        $blog =  Blog::find($id);
        if ($request->hasFile('blog_image')) {
             
           if ($blog->blog_image) {
               Storage::delete($blog->blog_image);
           }
   
         
   
           $imagePath = $request->file('blog_image')->storeAs('blog_image', 'blog_image' . now()->format('YmdHis') . '.' . $request->file('blog_image')->getClientOriginalExtension());
           $blog->blog_image = $imagePath;
          
       }
   
           $blog->title = $request->title;
           $blog->slug = $request->slug;
           $blog->summary = $request->summary;
           $blog->meta_keywords = $request->meta_keywords;
           $blog->meta_description = $request->meta_description;
           $blog->content = $request->input('content');
           $blog->category_id = $request->category_id;
         
           $blog->save();
         
           return redirect()->route('blogs')->with('success', 'BLOG Update SUCCESSFULY');
          
          }
          public function DeleteBlog($id){
            $blog = Blog::find($id);
            $blog->delete();
        
             return redirect()->back()->with('warning', 'Blog DELETED SUCCESSFULY');
        
            
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
