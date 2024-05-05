<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ConvertTextToPhp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'convert:text-to-php {file : The path to the .text file} {--output= : The directory to save the generated .php file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Convert .text file to .php file';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $file = $this->argument('file');
        
        if (!file_exists($file)) {
            $this->error('The specified file does not exist.');
            return;
        }
        
        $contents = file_get_contents($file);
        $phpContents = "<?php\n\n" . $contents; // Adding PHP tags
        
        $outputDirectory = $this->option('output') ?: dirname($file);
        $phpFile = $outputDirectory . '/' . pathinfo($file, PATHINFO_FILENAME) . '.php';
        
        if (file_exists($phpFile)) {
            // If file exists, delete it before saving the new one
            unlink($phpFile);
            $this->info("Old PHP file deleted: $phpFile");
        }
        
        file_put_contents($phpFile, $phpContents);
        
        $this->info("Converted $file to $phpFile successfully.");
    }
}