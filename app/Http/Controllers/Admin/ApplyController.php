<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apply;
use App\Models\Country;
use App\Models\College;
use App\Models\Course;

class ApplyController extends Controller
{
    public function index(){
        $applies = Apply::all();
        return view('admin.apply.index', compact('applies'));
    }

    public function EditApply($id){
        $apply = Apply::find($id);
        $countries = Country::all();
        $colleges = College::all();
        $courses = Course::all();
 
         return view('admin.apply.update' , compact('apply', 'countries' , 'colleges', 'courses'));
 
        
     }

     public function UpdateApply(Request $request, $id){
        $apply =  Apply::find($id);
        $apply->name = $request->name;
        $apply->email = $request->email;
        $apply->phone = $request->phone;
        $apply->address = $request->address;
        $apply->country_id = $request->country_id;
        $apply->college_id = $request->college_id;
        $apply->course_id = $request->course_id;
        $apply->user_id = $request->user_id;
        $apply->save();
        return redirect()->route('apply_list')->with('success', 'Apply Updated Successfully');
    }

    public function DeteleApply($id){
        $apply = Apply::find($id);
        $apply->delete();
 
         return redirect()->back()->with('warning', 'Apply info DELETED SUCCESSFULY');
 
        
     }
}