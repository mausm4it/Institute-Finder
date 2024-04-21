<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;
class UserController extends Controller
{
    public function index(){

        $users = User::all();
        $roles = Role::all();
        return view('admin.users.index', compact('users', 'roles'));
    }


    public function CreateUser(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
           
        ]);

        $user = new User();
       
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        

        return redirect()->back()->with('success', 'USER CREATED SUCCESSFULY');

        
    }


    public function UpdateUser(Request $request , $id){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
          
        ]);

        $user =  User::find($id);
        if ($user->hasRole($request->role)) {
            return back()->with('message', 'Role exists.');
        }

        $user->assignRole($request->role);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
         $user->save();
 
         return redirect()->back()->with('success', 'USER UPDATED SUCCESSFULY');
 
         
     }
 
     public function DeteleUser($id){
        $user = User::find($id);
        $user->delete();
 
         return redirect()->back()->with('warning', 'USER DELETED SUCCESSFULY');
 
        
     }
}
