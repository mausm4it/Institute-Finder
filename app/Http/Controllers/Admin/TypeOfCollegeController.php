<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypeOfCollege;

class TypeOfCollegeController extends Controller
{
    public function index(){

        $college_types = TypeOfCollege::all();
        return view('admin.type_of_college.index', compact('college_types'));
    }


    public function CreateTypeOfCollege(Request $request){
        $college_type = new TypeOfCollege();

        $college_type->name = $request->name;
        $college_type->slug = $request->slug;
        $college_type->save();
        

        return redirect()->back()->with('success', 'TypeOfCollege CREATED SUCCESSFULY');

        
    }


    public function UpdateTypeOfCollege(Request $request , $id){
        $college_type =  TypeOfCollege::find($id);

 
         $college_type->name = $request->name;
         $college_type->slug = $request->slug;
         $college_type->save();
 
         return redirect()->back()->with('success', 'TypeOfCollege UPDATED SUCCESSFULY');
 
         
     }
 
     public function DeteleTypeOfCollege($id){
         $college_type = TypeOfCollege::find($id);
         $college_type->delete();
  
          return redirect()->back()->with('warning', 'TypeOfCollege DELETED SUCCESSFULY');
  
         
      }
}
