<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\College;
use App\Models\Course;
use App\Models\Campus;
use App\Models\Country;

use App\Models\TypeOfCollege;

class SearchController extends Controller
{
    
 
    public function index(Request $request)
    {
       
    
     
       
        $collegesQuary = College::query();
        
        $ranking = $request->query('sort');
      
    
        $typeOfColleges= TypeOfCollege::all();
        $courses = Course::all();
        $campuses = Campus::all();
        $countries = Country::all();



        if($ranking === 'ranking_high_to_low'){
            $collegesQuary->orderBy('ranking_number', 'desc');

        }elseif($ranking === 'ranking_low_to_high'){
            $collegesQuary->orderBy('ranking_number', 'asc');
        }
      
      
       
        if ($request->has('course_id')) {
            $collegesQuary->whereHas('courses', function ($query) use ($request) {
                $query->where('course_id', $request->course_id);
            });
        }


        if ($request->has('campus_id')) {
            $collegesQuary->whereHas('campuses', function ($query) use ($request) {
                $query->where('campus_id', $request->campus_id);
            });
        }

        if ($request->has('type_of_college_id')) {
            $collegesQuary->where('type_of_college_id', $request->type_of_college_id);
        }


       
        
    if($request->has('name')){
        $searchName = $request->input('name');
        $collegesQuary->where('name', 'like', "%$searchName%")
        ->orWhere('about_college', 'like', "%$searchName%");
    } 



    if($request->has('query')){
        $query = $request->input('query');
        $results = College::where('name', 'like', '%' . $query . '%')
        ->orWhere('about_college', 'like', '%' .$query. '%')
        ->take(5)->get();
        if ($request->ajax()) {
            return response()->json($results);
        }
    }
       
    if($request->has('name', 'country_id', 'course_id' , 'type_of_college_id')){
        $searchName = $request->input('name');
        $collegesQuary->where('name', 'like', "%$searchName%")
        ->orWhere('about_college', 'like', "%$searchName%")
        ->whereHas('countries', function ($query) use ($request) {
            $query->where('country_id', $request->country_id);
        })
       ->whereHas('courses', function ($query) use ($request) {
            $query->where('course_id', $request->course_id);
        })
        ->where('type_of_college_id', $request->type_of_college_id);

    } 


      
       
 
        $colleges = $collegesQuary->paginate(10);

        
        
    
        return view('frontend.pages.search_result', compact('colleges', 'typeOfColleges' ,'courses', 'campuses','countries'));
    }



    
}
