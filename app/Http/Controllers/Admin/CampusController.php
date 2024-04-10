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
        $campus = new Campus();

        $campus->name = $request->name;
        $campus->slug = $request->slug;
        $campus->save();
        

        return redirect()->back()->with('success', 'CAMPUS AREA CREATED SUCCESSFULY');

        
    }


    public function UpdateCampus(Request $request , $id){
        $campus =  Campus::find($id);

 
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
