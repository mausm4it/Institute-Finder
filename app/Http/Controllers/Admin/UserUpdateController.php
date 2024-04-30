<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserUpdateController extends Controller
{
    public function index(){
        $user = Auth::user();

        return view('admin.user_update.index',compact('user'));
    }

    public function UpdateProfile(Request $request){
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


public function UpdatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8',
        ]);

        $user = Auth::user();

      

        $user->password = Hash::make($request->password);
        $user->save();


        return redirect()->back()->with('success', 'Password Update Successfully');
    }
}