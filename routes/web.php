<?php

use App\Http\Controllers\AdmainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdvaisorController;
use App\Models\Student;

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
// Route::get('/preAdvice/{id}', function($id){
//     return view('preAdvise',[
//         'student' => Student::find($id)
//     ]);
// });

// Route::get('/', function () {
//     return view('index');
// });

// Route::view('/temp', 'temp');


Route::get('/temp',[TestController::class,'index']);
// Route::get('/temps',[TestController::class,'students']);



// User loguot
Route::get('/logout',[AdvaisorController::class,'logout']);

// login page
Route::get('/',[AdvaisorController::class,'login']);
Route::post('/authenticate',[AdvaisorController::class,'authenticate']);

// show dashbord
Route::get('/index',[StudentController::class,'students'])->name('index');
Route::get('/index/{studentId}', [StudentController::class, 'showInfo']);

// Show the preAdvis page
Route::get('/preAdvise/{id}', [StudentController::class, 'showPre'])->name('preAdvice');

// update status of preAdive page
Route::put('/preAdvise/{id}',[StudentController::class, 'saveStatus']);

// edit stuednt information
Route::get('/editStudent/{id}',[StudentController::class, 'showEdit']);

// Update student information
Route::put('/editStudent/{id}',[StudentController::class,'update']);

// admian page show
Route::get('/admainIndex',[AdmainController::class,'advisors'])->name('admainIndex');
Route::get('/admainIndex/{advisorId}',[AdmainController::class,'showInfo']);

// Add advisor page
Route::get('/addAdvisor',[AdmainController::class,'displayAdd']);
// Save add advisor page
Route::POST('/addAdvisor/save',[AdmainController::class,'store']);

// Add Student page
Route::get('/addStudent',[AdmainController::class,'showAddStudent']);
