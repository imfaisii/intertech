<?php

use App\Http\Controllers\students\studentLoginController;
use App\Models\courseModel;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Request $request) {
    $user_id = $request->session()->get('student_user_id');
    if (!empty($user_id)) {
        return redirect()->route('studentDashboard');
    } else {
        return view('login');
    }
});

Route::any('dashboard', [studentLoginController::class, 'dashboard'])->name('dashboard')->middleware('studentSession');

Route::any('/login', [studentLoginController::class, 'loginview'])->name('floginview');

Route::post('/login-process', [studentLoginController::class, 'auth'])->name('flogin');

Route::get('test', function () {


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
    //     $iterator = new RecursiveIteratorIterator(
    //         new RecursiveDirectoryIterator($directory, RecursiveDirectoryIterator::SKIP_DOTS),
    //         RecursiveIteratorIterator::SELF_FIRST
    //     );

    //     foreach ($iterator as $file) {
    //         if ($file->isDir()) {
    //             echo 'Directory: ' . $file->getPathname() . PHP_EOL. "<br>:";
    //         } else {
    //             echo 'File: ' . $file->getPathname() . PHP_EOL;
    //         }
    //     }

    //     dd();
    //     $path = public_path('courses');
    //     $files =scandir($path); // this will give us all the folders
    //     dd($files);

});
