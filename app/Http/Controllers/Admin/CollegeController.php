<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\College;
use App\Models\Course;
use App\Models\Campus;
use App\Models\Country;
use App\Models\TypeOfCollege;
use App\Models\CourseDuration;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Storage;
class CollegeController extends Controller
{
    
    public function index(){
        $colleges = College::all();
        return view('admin.college.index', compact('colleges'));
    }
    
    public function CreateCollege(){
        $courses = Course::all();
        $campuses = Campus::all();
        $countries = Country::all();
        $type_of_colleges = TypeOfCollege::all();
        $course_durations = CourseDuration::all();
        $sub_categories = SubCategory::all();
        
        return view('admin.college.create', compact('courses','campuses' ,'type_of_colleges',
        'countries' , 'course_durations', 'sub_categories'));
    }
    public function EditCollege($id){
        $college = College::find($id);
        $courses = Course::all();
        $campuses = Campus::all();
        $countries = Country::all();
        $type_of_colleges = TypeOfCollege::all();
        return view('admin.college.edit', compact('college','courses','campuses' ,'type_of_colleges', 'countries'));
    }


    public function Publish_Institute(Request $request, $id){
        $college = College::find($id);
        $value = $request->input('publish') ? 1 : 0;
        $college->publish = $value;
        $college->save();

        if($college->publish == 1){
            return back()->with('success', 'Institute Publish Successfully');
        }else{
            return back()->with('warning', 'Institute Unpublish Successfully');
        }

        


    }

    public function MakeCollege(Request $request){

      
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


        $value = $request->input('publish') ? 1 : 0;
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
        $college->publish = $value;
        $college->meta_keywords = $request->meta_keywords;
        $college->meta_description = $request->meta_description;
        $college->save();

        $college->campuses()->attach($request->campuses);
        $college->courses()->attach($request->courses);
        $college->countries()->attach($request->country);


        // dd('Ok DOne');
        return redirect()->route('college')->with('success', 'Institute Info Updated Successfully');
    }

    public function UpdateCollege(Request $request, $id){

        $request->validate([
            'thumbline' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'slug' => 'required',
            'name' => 'required|string|max:255',
            'country' => 'required',
            'campuses' => 'required',
            'courses' => 'required',
         
            'brochuri' => 'file|max:10240|mimes:pdf,doc,docx',
          ]);
        
        $college = College::find($id);

      
        
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
        $value = $request->input('publish') ? 1 : 0;
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
        $college->publish =  $value;
        $college->meta_keywords = $request->meta_keywords;
        $college->meta_description = $request->meta_description;
        $college->save();

        $college->campuses()->sync($request->campuses);
        $college->courses()->sync($request->courses);
        $college->countries()->sync($request->country);
        
        // dd('Ok DOne');
        return redirect()->route('college')->with('success', 'Institute Info Updated Successfully');
    }


    public function DeteleCollege($id){
        $college = College::find($id);
        $college->campuses()->detach();
        $college->courses()->detach();
        $college->delete();
    
         return redirect()->back()->with('success', 'Institute DELETED SUCCESSFULY');
    
        
     }
}