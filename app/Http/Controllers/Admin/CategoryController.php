<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }


    public function CreateCategory(Request $request){
        $category = new Category();

        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();

        return redirect()->back()->with('success', 'CATEGORY CREATED SUCCESSFULY');

        
    }


    public function UpdateCategory(Request $request , $id){
        $category =  Category::find($id);

 
         $category->name = $request->name;
         $category->slug = $request->slug;
         $category->save();
 
         return redirect()->back()->with('success', 'CATEGORY UPDATED SUCCESSFULY');
 
         
     }
 
     public function DeteleCategory($id){
         $category = Category::find($id);
         $category->delete();
  
          return redirect()->back()->with('warning', 'CATEGORY DELETED SUCCESSFULY');
  
         
      }
}
