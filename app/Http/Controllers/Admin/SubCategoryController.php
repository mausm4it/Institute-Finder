<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    public function index(){

        $categories = Category::all();
        $subCategories = SubCategory::all();
        return view('admin.sub_category.index', compact('categories', 'subCategories'));
    }


    public function CreateSubCategory(Request $request){
        $subCategory = new SubCategory();

        $subCategory->name = $request->name;
        $subCategory->slug = $request->slug;
        $subCategory->category_id = $request->category_id;
        $subCategory->save();

        return redirect()->back()->with('success', 'SUB CATEGORY CREATED SUCCESSFULY');

        
    }


    public function UpdateSubCategory(Request $request , $id){
        $subCategory =  SubCategory::find($id);

 
         $subCategory->name = $request->name;
         $subCategory->slug = $request->slug;
         $subCategory->category_id = $request->category_id;
         $subCategory->save();
 
         return redirect()->back()->with('success', 'SUB CATEGORY UPDATED SUCCESSFULY');
 
         
     }
 
     public function DeteleSubCategory($id){
         $subCategory = SubCategory::find($id);
         $subCategory->delete();
  
          return redirect()->back()->with('warning', 'SUB CATEGORY DELETED SUCCESSFULY');
  
         
      }
}
