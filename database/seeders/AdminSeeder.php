<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminUser = User::create([
            'name' => "Md Shofiq",
           'email' => "super_admin@codetechbd.com",
            'password' => Hash::make(12345678),
        ]);

        $superAdminUser->assignRole('super-admin');


        $editorUser = User::create([
            'name' => "Md Masum",
           'email' => "editor@codetechbd.com",
            'password' => Hash::make(12345678),
        ]);

        $editorUser->assignRole('editor');


        $adminUser = User::create([
            'name' => "Md Masum",
           'email' => "admin@codetechbd.com",
            'password' => Hash::make(12345678),
        ]);

        $adminUser->assignRole('admin');

        $repoterUser = User::create([
            'name' => "Md Masum",
           'email' => "repoter@codetechbd.com",
            'password' => Hash::make(12345678),
        ]);

        $repoterUser->assignRole('repoter');
     
     
 
       
       
    }
}
