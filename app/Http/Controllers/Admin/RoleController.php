<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index(){

        $roles = Role::whereNotIn('name', ['admin'])->get();
        $permissions = Permission::all();
        return view('admin.role.index', compact('roles', 'permissions'));
    }


    public function EditRole($id){

        $role = Role::with('permissions')->find($id);
        $permissions = Permission::all();
        $data = $role->permissions()->pluck('id')->toArray();
      
        return view('admin.role.update', compact('role', 'permissions','data'));
    }


    public function CreateRole(Request $request){
        $request->validate([
           
            'name' => 'required|string|max:255|unique:roles,name',
            'permissions' => 'array',
        ]);
    
        $role = new Role();
        $role->name = $request->name;
        $role->guard_name = "web";
        $role->save();

        if ($request->has('permissions')) {
           
            $validPermissions = Permission::whereIn('id', $request->permissions)->pluck('id');
            
          
            if ($validPermissions->count() != count($request->permissions)) {
                return redirect()->back()->with('error', 'One or more permissions do not exist.');
            }
        
           
            $role->syncPermissions($validPermissions);
        }

        return redirect()->back()->with('success', 'ROLE CREATED SUCCESSFULY');

        
    }


    public function UpdateRole(Request $request , $id){

        $request->validate([
           
            'name' => 'required|string|max:255',
            'permissions' => 'array',
        ]);
        $role =  Role::find($id);

 
        $role->name = $request->name;
        $role->guard_name = "web";
        $role->save();
        if ($request->has('permissions')) {
           
            $validPermissions = Permission::whereIn('id', $request->permissions)->pluck('id');
            
          
            if ($validPermissions->count() != count($request->permissions)) {
                return redirect()->back()->with('error', 'One or more permissions do not exist.');
            }
        
           
            $role->syncPermissions($validPermissions);
        }
 
         return redirect()->back()->with('success', 'ROLE UPDATED SUCCESSFULY');
 
         
     }
 
     public function DeteleRole($id){
        $role = Role::find($id);
        $role->delete();
 
         return redirect()->back()->with('warning', 'ROLE DELETED SUCCESSFULY');
 
        
     }
}
