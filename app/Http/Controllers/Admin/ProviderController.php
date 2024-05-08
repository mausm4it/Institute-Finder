<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ProviderController extends Controller
{
    public function index(){
        
        return view('admin.social_login.index');
       }

   public function UpdateGithub(Request $request){
       
      
        $GithubenvData = [

            
               
                'GITHUB_CLIENT_SECRET' => $request->input('github_client_secret'),
                'GITHUB_CLIENT_ID' => $request->input('github_client_id'),

                // 'GOOGLE_CLIENT_ID' => $request->input('google_client_id'),
                // 'GOOGLE_CLIENT_SECRET' => $request->input('google_client_secret'),

                // 'FACEBOOK_CLIENT_ID' => $request->input('facebook_client_id'),
                // 'FACEBOOK_CLIENT_SECRET' => $request->input('facebook_client_secret'),
                
              
            ];
        
        

            foreach ($GithubenvData as $key => $value) {
        
                file_put_contents(app()->environmentFilePath(), str_replace(
                    $key . '=' . env($key), $key . '=' . $value, file_get_contents(app()->environmentFilePath())
                ));
            }
    
        
            Artisan::call('config:clear');
      
        return redirect()->back()->with('success', 'Github Social Login Update SUCCESSFULY');
    
         }


    public function UpdateGoogle(Request $request){
       
      
            $GoogleenvData = [
    
                
                   
                    'GOOGLE_CLIENT_SECRET' => $request->input('google_client_secret'),
                    'GOOGLE_CLIENT_ID' => $request->input('google_client_id'),
                    
                  
                ];
            
            
    
                foreach ($GoogleenvData as $key => $value) {
            
                    file_put_contents(app()->environmentFilePath(), str_replace(
                        $key . '=' . env($key), $key . '=' . $value, file_get_contents(app()->environmentFilePath())
                    ));
                }
        
            
                Artisan::call('config:clear');
          
            return redirect()->back()->with('success', 'Google Social Login Update SUCCESSFULY');
        
             }


    public function UpdateFacebook(Request $request){
       
      
                $FacebookenvData = [
        
                  
                        'FACEBOOK_CLIENT_ID' => $request->input('facebook_client_id'),
                        'FACEBOOK_CLIENT_SECRET' => $request->input('facebook_client_secret'),
                        
                      
                    ];
                
                
        
                    foreach ($FacebookenvData as $key => $value) {
                
                        file_put_contents(app()->environmentFilePath(), str_replace(
                            $key . '=' . env($key), $key . '=' . $value, file_get_contents(app()->environmentFilePath())
                        ));
                    }
            
                
                    Artisan::call('config:clear');
              
                return redirect()->back()->with('success', 'Github Social Login Update SUCCESSFULY');
            
                 }
    

}