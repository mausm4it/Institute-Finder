<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;


class MailController extends Controller
{
    public function index(){
      
        return view('admin.mail.index');
    }

    public function UpdateMailSettings(Request $request){
       
      
        $envData = [
                'MAIL_DRIVER' => 'smtp',
                'MAIL_HOST' => $request->input('mail_host'),
                'MAIL_PORT' => $request->input('mail_port'),
                'MAIL_USERNAME' => $request->input('mail_username'),
                'MAIL_PASSWORD' => $request->input('mail_password'),
                'MAIL_ENCRYPTION' => $request->input('mail_encryption'),
                'MAIL_FROM_ADDRESS' => $request->input('mail_address'),
                'MAIL_FROM_NAME' => $request->input('mailer_name'),
              
            ];
        
        

            foreach ($envData as $key => $value) {
        
                file_put_contents(app()->environmentFilePath(), str_replace(
                    $key . '=' . env($key), $key . '=' . $value, file_get_contents(app()->environmentFilePath())
                ));
            }
    
        
            Artisan::call('config:clear');
      
        return redirect()->back()->with('success', 'SMTP Settings Update SUCCESSFULY');
    
    }
}