<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseDuration; 
class CourseDurationCOntroller extends Controller
{
    public function index(){

        $courses = CourseDuration::all();
        return view('admin.course_duration.index', compact('courses'));
    }


    public function CreateCourseDuration(Request $request){
        $course = new CourseDuration();

        $course->name = $request->name;
        $course->slug = $request->slug;
        $course->save();
        

        return redirect()->back()->with('success', 'CourseDuration CREATED SUCCESSFULY');

        
    }


    public function UpdateCourseDuration(Request $request , $id){
        $course =  CourseDuration::find($id);

 
         $course->name = $request->name;
         $course->slug = $request->slug;
         $course->save();
 
         return redirect()->back()->with('success', 'CourseDuration UPDATED SUCCESSFULY');
 
         
     }
 
     public function DeteleCourseDuration($id){
        $course = CourseDuration::find($id);
        $course->delete();
 
         return redirect()->back()->with('warning', 'CourseDuration DELETED SUCCESSFULY');
 
        
     }
}
