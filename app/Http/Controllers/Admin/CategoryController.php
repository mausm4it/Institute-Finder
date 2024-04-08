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
        if ($request->hasFile('category_icon')) {
          
            if ($category->category_icon) {
                Storage::delete($category->category_icon);
            }
    
          
    
            $imagePath = $request->file('category_icon')->storeAs('category_icon', 'category_icon' . now()->format('YmdHis') . '.' . $request->file('category_icon')->getClientOriginalExtension());
            $category->category_icon = $imagePath;
           
        }
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();
        

        return redirect()->back()->with('success', 'CATEGORY CREATED SUCCESSFULY');

        
    }


    public function UpdateCategory(Request $request , $id){
        $category =  Category::find($id);

        if ($request->hasFile('category_icon')) {
          
            if ($category->category_icon) {
                Storage::delete($category->category_icon);
            }
    
          
    
            $imagePath = $request->file('category_icon')->storeAs('category_icon', 'category_icon' . now()->format('YmdHis') . '.' . $request->file('category_icon')->getClientOriginalExtension());
            $category->category_icon = $imagePath;
           
        }
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
