<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
class CityController extends Controller
{
    public function index(){

        $cities = City::all();
        return view('admin.city.index', compact('cities'));
    }


    public function CreateCity(Request $request){
        $city = new City();

        $city->name = $request->name;
        $city->slug = $request->slug;
        $city->save();
        

        return redirect()->back()->with('success', 'CITY CREATED SUCCESSFULY');

        
    }


    public function UpdateCity(Request $request , $id){
        $city =  City::find($id);

 
         $city->name = $request->name;
         $city->slug = $request->slug;
         $city->save();
 
         return redirect()->back()->with('success', 'CITY UPDATED SUCCESSFULY');
 
         
     }
 
     public function DeteleCity($id){
         $city = City::find($id);
         $city->delete();
  
          return redirect()->back()->with('warning', 'CITY DELETED SUCCESSFULY');
  
         
      }
}
