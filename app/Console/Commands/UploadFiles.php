<?php

namespace App\Console\Commands;

use App\Models\courseModel;
use Exception ;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UploadFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:uploadFiles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is used to upload files in the database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
     try{
        $this->info('The command is starting !');
        $bar = $this->output->createProgressBar(100);
        $directory = storage_path('courses');
        $folders = Storage::allDirectories("courses");
        foreach ($folders as $folder) {
            $files = Storage::allFiles("{$folder}");
            foreach ($files as $file) {
                $file_content = json_decode(file_get_contents(storage_path() . "/$file"), true);
                $course=courseModel::updateOrCreate([
                    'name'=>$file_content['subjectName'],
                ],[
                'description'=>$file_content['subjectDescription'],
                'headline'=>$file_content['headline'],
                'outcomes'=>json_encode($file_content['courseOutcomes']),
                'status'=>1,
                ]);
                if(array_key_exists('slides',$file_content))
                $course->slides()->updateOrCreate([
                    'slide' => json_encode($file_content['slides']),
                ]);
            }

        }
        $bar->finish();

     }catch(Exception $e){
        Log::info($e->getMessage());
    }
    }
}
