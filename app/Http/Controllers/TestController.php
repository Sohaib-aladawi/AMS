<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $student = Student::with('courses')->findOrFail('s76s198');
        // $student = Student::with('courses')->get();
        $courses = Course::with('specializations')->get();
        // dd($courses);
        return view('temp', compact('courses','student'));
    }
}
