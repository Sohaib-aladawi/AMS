<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AdvaisorController;

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
Route::get('/temps',[TestController::class,'students']);

// login page
Route::get('/',[AdvaisorController::class,'login']);
Route::post('/authenticate',[AdvaisorController::class,'authenticate']);