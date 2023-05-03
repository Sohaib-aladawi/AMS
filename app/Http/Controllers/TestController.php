<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $courses = Course::with('specializations')->get();
        
        return view('temp', compact('courses'));
    }
}
