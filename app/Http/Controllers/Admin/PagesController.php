<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
{
    public function index(){
        $pages = Page::all();
       
        return view('admin.pages.index', compact('pages'));
       }

    public function UpdatePageView($id){
      $page =  Page::find($id);
      
      return view('admin.pages.update', compact('page'));
     }

     public function CreatePage(Request $request){
        
        $request->validate([
           
           'slug' => 'required',
           'description' => 'required',
           'title' => 'required|string|max:255',
         ]);
       
           $page = new Page();
           $page->title = $request->title;
           $page->slug = $request->slug;
           $page->description = $request->description;
           $page->meta_keywords = $request->meta_keywords;
           $page->meta_description = $request->meta_description;
           $page->save();
         
           return redirect()->back()->with('success', 'PAGE CREATED SUCCESSFULY');
          
          }
   
          public function UpdatePage(Request $request, $id){
           
            $request->validate([
           
                'slug' => 'required',
                'description' => 'required',
                'title' => 'required|string|max:255',
              ]);
            
                $page =  Page::find($id);
                $page->title = $request->title;
                $page->slug = $request->slug;
                $page->description = $request->description;
                $page->meta_keywords = $request->meta_keywords;
                $page->meta_description = $request->meta_description;
                $page->save();
              
                return redirect()->back()->with('success', 'PAGE UPDATED SUCCESSFULY');
               
               }
             
             public function DeletePage($id){
               $page = Page::find($id);
               $page->delete();
           
                return redirect()->back()->with('warning', 'PAGE DELETED SUCCESSFULY');
           
               
            }
   
   
     
}