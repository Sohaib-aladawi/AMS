<?php

namespace App\Http\Controllers;

use App\Models\Specialization;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;

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
    public function store(Request $request){
        //dd($request);
        $formFields= $request->validate([
            'advisor_code' => 'required | unique:users',
            'advisor_name' => 'required',
            'email' => ['required','email'],
            'department_id' => 'required',
            
        ]);
        $temp=['role' => 'user','password' =>bcrypt('123'),'created_at' => now(),'updated_at' => now(),];
        $formFields= array_merge($formFields,$temp);
        //dd($formFields);
        User::create($formFields);

        return redirect('/admainIndex');
    }

    // show add student page
    public function showAddStudent(){
        if (auth()->user()->role != 'admain') {
            abort(403, 'Unauthoraized Action');
        }
        $specializations = Specialization::all();
        $users = User::where('role', '=', 'user')->get();

        //dd($users);
        return view('/addStudent',['specializations'=>$specializations, 'users'=>$users]);
    }
}
