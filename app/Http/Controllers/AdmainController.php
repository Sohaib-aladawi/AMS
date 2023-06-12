<?php

namespace App\Http\Controllers;

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

        return view('admainIndex', ['advisors'=>$advisors, 'students'=>$students,'num'=>$numOfStudent]);
    }

    public function showInfo(Request $request, $advisorId)
    {
        $advisors = User::find($advisorId);
        $student = Student::where('advisor_id','=',$advisorId)->get();
        $numOfStudent = count($student);
        
        $data = [
            'advisor_name' => $advisors->advisor_name,
            'advisor_code' => $advisors->advisor_code,
            'email' => $advisors->email,
            'num' => $numOfStudent,
        ];
        return response()->json($data) ;
    }
}
