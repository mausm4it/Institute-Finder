<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\College;
use App\Models\Country;
use App\Models\Apply;

class ApplyController extends Controller
{
    public function index(){
        $courses = Course::all();
        $colleges = College::all();
        $countries = Country::all();
        return view('frontend.pages.apply', compact('courses' , 'colleges', 'countries'));
    }



    public function ApplyInstitute(Request $request){
        $apply = new Apply();
        $apply->name = $request->name;
        $apply->email = $request->email;
        $apply->phone = $request->phone;
        $apply->address = $request->address;
        $apply->country_id = $request->country_id;
        $apply->college_id = $request->college_id;
        $apply->course_id = $request->course_id;
        $apply->user_id = $request->user_id;
        $apply->save();
        return redirect()->route('apply_institute_list')->with('success', 'Your Apply Request Successfully We Will Contact Soon');
    }
}