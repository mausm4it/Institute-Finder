<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\College;
use App\Models\Campus;
use App\Models\Country;
use App\Models\TypeOfCollege;
use App\Models\CourseDuration;
use App\Models\SubCategory;


class UserPanelController extends Controller
{
   public function Dashboard(){
    return view('frontend.user_panel.dashboard');
   }
   public function CreateInstitute(){
      $courses = Course::all();
      $campuses = Campus::all();
      $countries = Country::all();
      $type_of_collages = TypeOfCollege::all();
      $course_durations = CourseDuration::all();
      $sub_categories = SubCategory::all();
      
      return view('frontend.user_panel.pages.create', compact('courses','campuses' ,'type_of_collages',
      'countries' , 'course_durations', 'sub_categories'));
  }
   public function StoreInstitute(){

      $request->validate([
         'thumbline' => 'image|mimes:jpeg,png,jpg,gif,svg',
         'slug' => 'required',
         'name' => 'required|string|max:255',
         'country' => 'required',
         'campuses' => 'required',
         'courses' => 'required',
         
         'brochuri' => 'file|max:10240|mimes:pdf,doc,docx',

       ]);
     
     $college = new College();

   
     
      if ($request->hasFile('thumbline')) {
           
         if ($college->thumbline) {
             Storage::delete($college->thumbline);
         }
 
       
 
         $imagePath = $request->file('thumbline')->storeAs('college_thumbline', 'thumbline' . now()->format('YmdHis') . '.' . $request->file('thumbline')->getClientOriginalExtension());
         $college->thumbline = $imagePath;
        
     }

     if ($request->hasFile('gallery')) {
         if ($college->gallery) {
             Storage::delete($college->gallery);
         }
         foreach ($request->file('gallery') as $file) {
             if ($file) {
                 $imagePath = $file->storeAs('college_gallery', 'file' . now()->format('YmdHis') . '.' . $file->getClientOriginalExtension());
                 $college->gallery = $imagePath;
             }
         }
     }

     $college->name = $request->name;
     $college->slug = $request->slug;
     $college->summary = $request->summary;
     $college->about_college = $request->input('about_college');
     $college->admisstion_current_time = $request->admisstion_current_time;
     $college->schollership = $request->schollership;
     $college->faculty = $request->faculty;
     $college->hostel = $request->hostel;
     $college->faculty = $request->faculty;
     $college->brochuri = $request->brochuri;
     $college->placement = $request->placement;
     $college->video_link = $request->video_link;
     $college->type_of_college_id = $request->type_of_college_id;
     $college->ranking_number = $request->ranking_number;
     $college->meta_keywords = $request->meta_keywords;
     $college->meta_description = $request->meta_description;
     $college->save();

     $college->campuses()->attach($request->campuses);
     $college->courses()->attach($request->courses);
     $college->countries()->attach($request->country);


     // dd('Ok DOne');
     return view('frontend.user_panel.pages.list')->with('success', 'Institute Info Updated Successfully');
   }
}
