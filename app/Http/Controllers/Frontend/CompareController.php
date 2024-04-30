<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\College;

class CompareController extends Controller
{
   public function index(){
    $colleges = College::all();
    return view('frontend.pages.compare.compare', compact('colleges'));
   }



   public function compare(Request $request)
   {
       $college_Id1 = $request->college_Id1;
       $college_Id2 = $request->college_Id2;
   
       $college1 = College::findOrFail($college_Id1);
       $college2 = College::findOrFail($college_Id2);
   
       return view('frontend.pages.compare.search_compare', compact('college1', 'college2'));
   }
}