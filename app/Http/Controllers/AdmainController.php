<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Specialization;
use App\Models\Student_course;

class AdmainController extends Controller
{
    //
    public function advisors(Request $request)
    {
        $students = Student::get();
        $numOfStudent = count($students);
        if (request(['search']) ?? false) {
            $advisors = User::where('role', '=', 'user')
                ->filter(request(['search']))
                ->get();
        } else {
            $advisors = User::where('role', '=', 'user')->get();
        }

        return view('admainIndex', ['advisors' => $advisors, 'students' => $students, 'num' => $numOfStudent]);
    }
    public function showInfo(Request $request, $advisorId)
    {
        $advisors = User::find($advisorId);

        if ($advisors) {
            $student = Student::where('advisor_id', '=', $advisorId)->get();
            $numOfStudent = count($student);

            $data = [
                'advisor_name' => $advisors->advisor_name,
                'advisor_code' => $advisors->advisor_code,
                'email' => $advisors->email,
                'num' => $numOfStudent,
            ];

            return response()->json($data);
        }

        return response()->json(['error' => 'Advisor not found'], 404);
    }

    // display add Advisor page
    public function displayAdd()
    {
        if (auth()->user()->role != 'admain') {
            abort(403, 'Unauthoraized Action');
        }
        return view('/addAdvisor');
    }
    // Store advisor data
    public function store(Request $request)
    {
        //dd($request);
        $formFields = $request->validate([
            'advisor_code' => 'required | unique:users',
            'advisor_name' => 'required|max:40' ,
            'email' => ['required', 'email'],
            'department_id' => 'required',
        ]);
        $temp = ['role' => 'user', 'password' => bcrypt('123'), 'created_at' => now(), 'updated_at' => now()];
        $formFields = array_merge($formFields, $temp);
        //dd($formFields);
        User::create($formFields);

        return redirect('/admainIndex');
    }

    // show add student page
    public function showAddStudent()
    {
        if (auth()->user()->role != 'admain') {
            abort(403, 'Unauthoraized Action');
        }
        $specializations = Specialization::all();
        $users = User::where('role', '=', 'user')->get();

        //dd($users);
        return view('/addStudent', ['specializations' => $specializations, 'users' => $users]);
    }

    // create a new student
    public function createStudent(Request $request)
{
    $formFields = $request->validate([
        'student_id' => 'required|unique:students|regex:/^[SsJj]\d{2}[SsJj]\d{3,6}$/',
        'student_name' => 'required',
        'email' => ['required', 'email','regex:/^[SsJj]\d{2}[SsJj]\d{3,6}@utas\.edu\.om$/'],
        'phone' => 'required|min:70000000|max:99999999',
        'current_CGPA' => 'required|min:0|max:4',
        'advisor_id' => 'required',
        'department_id' => 'required',
        'status' => 'required',
        'specialization_id' => 'required',
        'EL4SCORE' => 'required|min:0|max:100',
        'IELTSSCORE' => 'min:0|max:9|nullable',
    ]);

    // Remove the $temp array

    Student::create($formFields);
    
    return redirect('/admainIndex');
}
}
