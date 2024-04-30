<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_superAdmin = Role::create(['name' => 'super-admin']);
        $userAdmin = Role::create(['name' => 'admin']);
        $userEditor = Role::create(['name' => 'editor']);
        $userRepoter = Role::create(['name' => 'repoter']);
        

        //Elements
        Permission::create(['name' => 'control category']);
        Permission::create(['name' => 'control sub category']);
        Permission::create(['name' => 'control campus area']);
        Permission::create(['name' => 'control course duration']);
        Permission::create(['name' => 'control course']);
        Permission::create(['name' => 'control type of institute']);
        Permission::create(['name' => 'control course fee']);
        Permission::create(['name' => 'control page']);
        Permission::create(['name' => 'control user contact']);
        Permission::create(['name' => 'control subscriber']);
      
        
        
        
        
        //Institute
        Permission::create(['name' => 'view institute']);
        Permission::create(['name' => 'create institute']);
        Permission::create(['name' => 'update institute']);
        Permission::create(['name' => 'delete institute']);
        Permission::create(['name' => 'publish institute']);


        //Blog
        Permission::create(['name' => 'view article']);
        Permission::create(['name' => 'create article']);
        Permission::create(['name' => 'update article']);
        Permission::create(['name' => 'delete article']);
        Permission::create(['name' => 'publish article']);
        Permission::create(['name' => 'control blog category']);

        

        //settings
        Permission::create(['name' => 'control settings']);

        //User And Role
        Permission::create(['name' => 'control user']);
        Permission::create(['name' => 'control role']);

        //Apply

        Permission::create(['name' => 'view apply']);
        Permission::create(['name' => 'update apply']);
        Permission::create(['name' => 'delete apply']);


        
        $role_superAdmin->givePermissionTo(Permission::all());

        $userAdmin->givePermissionTo(['control category', 'control sub category',
         'control campus area', 'control course duration', 'control course', 'control type of institute',
         'view institute', 'create institute', 'update institute', 'delete institute', 
         'view article',  'create article', 'update article', 'delete article', 'control blog category', 'control user']);

         $userEditor->givePermissionTo([
         'view institute', 'create institute',  
         'view article',  'create article', ]);

         $userRepoter->givePermissionTo([
            'view article',  'create article']);
    }
}