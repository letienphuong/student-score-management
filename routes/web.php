<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LecturerController;
use App\Http\Controllers\Admin\StudentsController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\ClassController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//   Route::prefix('admin')->group(function(){
//       Route::get('/dashboard',[DashboardController::class,'index']);
//       Route::get('lecturer',[LecturerController::class,'index']);
//   }) ;


   Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
       Route::get('/dashboard',[DashboardController::class,'index']);
       Route::get('lecturers',[LecturerController::class,'index']);
       Route::get('add-lecturer',[LecturerController::class,'create']);
       Route::post('add-lecturer',[LecturerController::class,'store']);
       Route::get('edit-lecturer/{lecturer_id}',[LecturerController::class,'edit']);
       Route::put('update-lecturer/{lecturer_id}',[LecturerController::class,'update']);
       Route::get('delete-lecturer/{lecturer_id}',[LecturerController::class,'destroy']);

       //Students
       Route::get('students',[StudentsController::class,'index']);
       Route::get('add-student',[StudentsController::class,'create']);
       Route::post('add-student',[StudentsController::class,'store']);
       Route::get('student/{student_id}',[StudentsController::class,'edit']);
       Route::put('update-student/{student_id}',[StudentsController::class,'update']);
       Route::get('delete-student/{student_id}',[StudentsController::class,'destroy']);

    // Department
       Route::get('departments',[DepartmentController::class,'index']);
       Route::get('add-department',[DepartmentController::class,'create']);
       Route::post('add-department',[DepartmentController::class,'store']);
       Route::get('department/{department_id}',[DepartmentController::class,'edit']);
       Route::get('edit-department/{department_id}',[DepartmentController::class,'edit']);
       Route::put('update-department/{department_id}',[DepartmentController::class,'update']);
       Route::get('delete-department/{department_id}',[DepartmentController::class,'destroy']);

//       Classes
       Route::get('class',[ClassController::class,'index']);
       Route::get('add-class',[ClassController::class,'create']);
       Route::post('add-class',[ClassController::class,'store']);
       Route::get('class/{class_id}',[ClassController::class,'edit']);
       Route::put('update-class/{class_id}',[ClassController::class,'update']);
       Route::get('delete-class/{class_id}',[ClassController::class,'destroy']);



   }) ;
