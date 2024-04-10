<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\College;
use App\Models\Course;
use App\Models\Campus;
use App\Models\TypeOfCollege;
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
        $type_of_collages = TypeOfCollege::all();
        return view('admin.college.create', compact('courses','campuses' ,'type_of_collages'));
    }
    public function EditCollege($id){
        $college = College::find($id);
        $courses = Course::all();
        $campuses = Campus::all();
        $type_of_collages = TypeOfCollege::all();
        return view('admin.college.edit', compact('college','courses','campuses' ,'type_of_collages'));
    }

    public function MakeCollege(Request $request){
        $request->validate([
            'blog_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
        $college->ranking_number = $request->ranking_number;
        $college->meta_keywords = $request->meta_keywords;
        $college->meta_description = $request->meta_description;
        $college->save();

        $college->campuses()->sync($request->campuses);
        $college->courses()->sync($request->courses);
        $college->type_of_collages()->sync($request->type_of_collages);


        // dd('Ok DOne');
        return redirect()->route('college')->with('success', 'Institute Info Updated Successfully');
    }

    public function UpdateCollege(Request $request, $id){

        $request->validate([
            'blog_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
        $college->ranking_number = $request->ranking_number;
        $college->meta_keywords = $request->meta_keywords;
        $college->meta_description = $request->meta_description;
        $college->save();

        $college->campuses()->sync($request->campuses);
        $college->courses()->sync($request->courses);
        $college->type_of_collages()->sync($request->type_of_collages);
        // dd('Ok DOne');
        return redirect()->route('college')->with('success', 'Institute Info Updated Successfully');
    }


    public function DeteleCollege($id){
        $college = College::find($id);
        $college->campuses()->detach();
        $college->courses()->detach();
        $college->type_of_collages()->detach();
        $college->delete();
    
         return redirect()->back()->with('success', 'Institute DELETED SUCCESSFULY');
    
        
     }
}
