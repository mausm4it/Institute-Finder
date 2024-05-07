<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campus;
class CampusController extends Controller
{
    public function index(){

        $campuses = Campus::all();
        return view('admin.campus.index', compact('campuses'));
    }


    public function CreateCampus(Request $request){
        $request->validate([
            'slug' => 'required',
            'name' => 'required|string|max:255',
          ]);
        $campus = new Campus();

        if ($request->hasFile('campus_image')) {
              
            if ($campus->campus_image) {
                Storage::delete($campus->campus_image);
            }
    
          
    
            $imagePath = $request->file('campus_image')->storeAs('college_campus_image', 'campus_image' . now()->format('YmdHis') . '.' . $request->file('campus_image')->getClientOriginalExtension());
            $campus->campus_image = $imagePath;
           
        }

        $campus->name = $request->name;
        $campus->slug = $request->slug;
        $campus->save();
        

        return redirect()->back()->with('success', 'CAMPUS AREA CREATED SUCCESSFULY');

        
    }


    public function UpdateCampus(Request $request , $id){
        $request->validate([
            'slug' => 'required',
            'name' => 'required|string|max:255',
          ]);
        $campus =  Campus::find($id);

        if ($request->hasFile('campus_image')) {
              
            if ($campus->campus_image) {
                Storage::delete($campus->campus_image);
            }
    
          
    
            $imagePath = $request->file('campus_image')->storeAs('college_campus_image', 'campus_image' . now()->format('YmdHis') . '.' . $request->file('campus_image')->getClientOriginalExtension());
            $campus->campus_image = $imagePath;
           
        }
         $campus->name = $request->name;
         $campus->slug = $request->slug;
         $campus->save();
 
         return redirect()->back()->with('success', 'CAMPUS AREA UPDATED SUCCESSFULY');
 
         
     }
 
     public function DeteleCampus($id){
         $campus = Campus::find($id);
         $campus->delete();
  
          return redirect()->back()->with('warning', 'CAMPUS AREA DELETED SUCCESSFULY');
  
         
      }
}