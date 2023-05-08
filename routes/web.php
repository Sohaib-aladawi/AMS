<?php

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

// Route::get('/', function () {
//     return view('index');
// });

//Route::view('/temp', 'temp');


Route::get('/temp',[TestController::class,'index']);
// Route::get('/temps',[TestController::class,'students']);



// User loguot
Route::get('/logout',[AdvaisorController::class,'logout']);

// login page
Route::get('/',[AdvaisorController::class,'login']);
Route::post('/authenticate',[AdvaisorController::class,'authenticate']);

// show dashbord
Route::get('/index',[StudentController::class,'students']);
Route::get('/index/{studentId}', [StudentController::class, 'showInfo']);

// Show the preAdvis page
Route::get('/preAdvice/{id}', [StudentController::class, 'showPre'])->name('preAdvice');
// Route::get('/preAdvice/{id}', function($id){
//     return view('preAdvise',[
//         'student' => Student::find($id)
//     ]);
// });
