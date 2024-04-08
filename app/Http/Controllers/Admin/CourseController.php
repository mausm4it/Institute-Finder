<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseDuration;
use App\Models\SubCategory;

class CourseController extends Controller
{
    public function index(){

        $courses = Course::all();
        $course_durations = CourseDuration::all();
        $sub_categories = SubCategory::all();

        return view('admin.course.index', compact('courses','course_durations','sub_categories'));
    }


    public function CreateCourse(Request $request){
        $course = new Course();

        $course->name = $request->name;
        $course->slug = $request->slug;
        $course->semester = $request->semester;
        $course->credit = $request->credit;
        $course->course_duration_id = $request->course_duration_id;
        $course->sub_category_id = $request->sub_category_id;
        $course->save();
        

        return redirect()->back()->with('success', 'COURSE CREATED SUCCESSFULY');

        
    }


    public function UpdateCourse(Request $request , $id){
        $course =  Course::find($id);

 
         $course->name = $request->name;
         $course->slug = $request->slug;
         $course->semester = $request->semester;
         $course->credit = $request->credit;
         $course->course_duration_id = $request->course_duration_id;
         $course->sub_category_id = $request->sub_category_id;
         $course->save();
 
         return redirect()->back()->with('success', 'COURSE UPDATED SUCCESSFULY');
 
         
     }
 
     public function DeteleCourse($id){
         $course = Course::find($id);
         $course->delete();
  
          return redirect()->back()->with('warning', 'COURSE DELETED SUCCESSFULY');
  
         
      }
}
