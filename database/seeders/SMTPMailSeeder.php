<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class SMTPMailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $envData = [
            'MAIL_DRIVER' => 'smtp',
            'MAIL_HOST' => 'sandbox.smtp.mailtrap.io',
            'MAIL_PORT' => '2525',
            'MAIL_USERNAME' => 'd8739a3148a5af',
            'MAIL_PASSWORD' => 'd8739a3148a5af',
            'MAIL_ENCRYPTION' => 'tls',
            'MAIL_FROM_ADDRESS' => 'masum4it@gmail.com',
            'MAIL_FROM_NAME' => 'masum4it',
          
        ];
    
    

        foreach ($envData as $key => $value) {
    
            file_put_contents(app()->environmentFilePath(), str_replace(
                $key . '=' . env($key), $key . '=' . $value, file_get_contents(app()->environmentFilePath())
            ));
        }

    
        Artisan::call('config:clear');
      

    }
}