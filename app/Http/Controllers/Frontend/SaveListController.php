<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SaveList;

class SaveListController extends Controller
{
   
   public function index(){
      $save_lists = SaveList::all();
      return view('frontend.user_panel.pages.save_list', compact('save_lists'));

   }
   
   
   public function SaveList(Request $request){
   $save_list = new SaveList();
   $save_list->save();
   $save_list->users()->sync($request->users);
   $save_list->colleges()->sync($request->colleges);
   return redirect()->route('save_list')->with('success', 'Institute Saved Successfully');


   }


   public function DeleteSaveList($id){
      $save_list = SaveList::find($id);
      $save_list->delete();
      $save_list->users()->detach();
      $save_list->colleges()->detach();
      return redirect()->back()->with('success', 'Item Delete Successfully');
   
   
      }
}