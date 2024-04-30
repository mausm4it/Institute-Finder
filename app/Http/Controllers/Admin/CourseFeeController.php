<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseFee;
use App\Models\College;
use App\Models\Course;

class CourseFeeController extends Controller
{
    public function index(){

        $course_fees = CourseFee::all();
        $colleges = College::all();
        $courses = Course::all();
        return view('admin.course_fee.index', compact('course_fees', 'colleges', 'courses'));
    }


    public function CreateCourse_fee(Request $request){
        $request->validate([
            'amount' => 'required',
            'course_id' => 'required',
            'college_id' => 'required',
          ]);
        $course_fee = new CourseFee();

        $course_fee->amount = $request->amount;
        $course_fee->course_id = $request->course_id;
        $course_fee->college_id = $request->college_id;
        $course_fee->save();
        

        return redirect()->back()->with('success', 'COURSE FEE CREATED SUCCESSFULY');

        
    }

    public function EditCourse_fee($id){
        $course_fee = CourseFee::find($id);
        $courses = Course::all();

        $colleges = College::all();
        return view('admin.course_fee.update', compact('colleges','courses','course_fee' ));
    }


    public function UpdateCourse_fee(Request $request , $id){

        $request->validate([
            'amount' => 'required',
            'course_id' => 'required',
            'college_id' => 'required',
          ]);
        $course_fee =  CourseFee::find($id);

        $course_fee->amount = $request->amount;
        $course_fee->course_id = $request->course_id;
        $course_fee->college_id = $request->college_id;
         $course_fee->save();
 
        return redirect()->route('course_fee')->with('success', 'COURSE FEE UPDATED SUCCESSFULY');
 
         
     }
 
     public function DeteleCourse_fee($id){
        $course_fee = CourseFee::find($id);
        $course_fee->delete();
 
         return redirect()->back()->with('warning', 'COURSE FEE DELETED SUCCESSFULY');
 
        
     }
}