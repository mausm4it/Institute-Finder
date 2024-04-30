<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apply;
use App\Models\SaveList;
use App\Models\User;
use Auth;



class UserPanelController extends Controller
{
   public function Dashboard(){
      $applies = Apply::where('user_id', auth()->user()->id)->get();

     
      $save_lists = SaveList::whereHas('users', function ($query) {
         $query->where('user_id', auth()->user()->id);
     })->get();
     

    return view('frontend.user_panel.dashboard', compact('applies', 'save_lists'));
   }


//settings

public function SettingView(){
   $user = Auth::user();
   return view('frontend.user_panel.pages.settings' , compact('user'));
  }

public function UpdateSettings(Request $request){
   $user = Auth::user();
   if ($request->hasFile('user_profile')) {
             
      if ($user->user_profile) {
          Storage::delete($user->user_profile);
      }

    

      $imagePath = $request->file('user_profile')->storeAs('user_profile', 'user_profile' . now()->format('YmdHis') . '.' . $request->file('user_profile')->getClientOriginalExtension());
      $user->user_profile = $imagePath;
     
  }
   $user->name = $request->name;
   $user->email = $request->email;
   $user->phone = $request->phone;
   $user->save();

   
   return redirect()->back()->with('success', 'User Update Successfully');
  }




   //apply
   public function ApplyInstituteList(){
    $applies = Apply::where('user_id', auth()->user()->id)->get();
    return view('frontend.user_panel.pages.apply_list' , compact('applies'));
   }

   public function DeleteApplyInstituteList($id){
      $apply = Apply::find($id);
      $apply->delete();
      return redirect()->back()->with('success', 'Item Deleted Successfully');
     }
   
}