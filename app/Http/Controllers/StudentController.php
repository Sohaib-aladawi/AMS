<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Specialization;
use App\Models\Student_course;
use Illuminate\Support\Facades\DB;
use Mockery\Generator\StringManipulation\Pass\Pass;

class StudentController extends Controller
{
    // show dashbord page
    public function students()
    {
        $students = Student::where('advisor_id', '=', auth()->user()->advisor_id)->get();
        return view('index', compact('students'));
    }

    public function showInfo(Request $request, $studentId)
    {
        $student = Student::with('specialization')->find($studentId);
        $specializationId = $student->specialization_id;
        //$specialization =  Specialization::find($specializationId);
        // Perform any additional logic or data manipulation here if needed
        $data = [
            'student_name' => $student->student_name,
            'specialization_id' => $student->specialization->specialization_name,
            'current_CGPA' => $student->current_CGPA,
            'email' => $student->email,
            'phon' => $student->phon,
        ];
        return response()->json($data);
    }

    // show pre-advise form
    public function showPre($id)
    {
        $student = Student::find($id);
        $specializationId = $student->specialization_id;
        $all = Course::all();
        $courses = DB::table('course_specialization')
            ->join('courses', 'course_specialization.course_id', '=', 'courses.course_id')
            ->join('student_course', function ($join) use ($id) {
                $join->on('courses.course_id', '=', 'student_course.course_id')->where('student_course.student_id', '=', $id);
            })
            ->where('course_specialization.specialization_id', '=', $specializationId)
            ->orderBy('semester')
            ->get();

        $specialization = Specialization::with('level')
            ->where('specialization_id', '=', $specializationId)
            ->first();

        return view('preAdvise', ['student' => $student, 'courses' => $courses, 'specialization' => $specialization, 'all' => $all]);
    }
    // save status of preAdvise
    public function saveStatus(Request $request, $id, Student_course $Sc)
    {
        $selectedCourses = $request->input('courses', []);
        foreach ($selectedCourses as $courseId => $value) {
            // Update the status in the student_course table
            //dd($value);
            Student_course::where('course_id', $value)
                ->where('student_id', $id)
                ->update(['status' => 'study']);
        }
        return redirect()->route('index');
    }

    // show edit page
    public function showEdit($id)
    {
        $student = Student::find($id);
        $specializationId = $student->specialization_id;
        $all = Course::all();
        $courses = DB::table('course_specialization')
            ->join('courses', 'course_specialization.course_id', '=', 'courses.course_id')
            ->join('student_course', function ($join) use ($id) {
                $join->on('courses.course_id', '=', 'student_course.course_id')->where('student_course.student_id', '=', $id);
            })
            ->where('course_specialization.specialization_id', '=', $specializationId)
            ->orderBy('semester')
            ->get();

        $specializations = Specialization::with('level')->get();
        //dd($specialization);

        return view('/editStudent', ['student' => $student, 'courses' => $courses, 'specializations' => $specializations, 'all' => $all]);
    }

    // Updating stuednt info
    public function update(Request $request, Student $student, Student_course $sc, $id)
    {
        //dd($request);

        $student = Student::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required',
            'CGPA' => 'required',
        ]);

        // Start the transaction
        DB::beginTransaction();

        // Update the student table
        $student->update([
            'student_name' => $request->input('name'),
            'current_CGPA' => $request->input('CGPA'),
            'specialization_id' => $request->input('specialization'),
            'IELTSSCORE' => $request->input('IELTSSCORE'),
            'status' => $request->input('studentStatus')
        ]);

        // Update the course statuses
        if($request['status'] == null){}else{
        foreach ($request['status'] as $courseId => $status) {
            $course = $sc
                ::where('course_id', $courseId)
                ->where('student_id', $id)
                ->firstOrFail();

            $course->update([
                'status' => $status,
                
            ]);
        }}

        // Commit the transaction
        DB::commit();

        // Redirect to a confirmation page or return a response
        return redirect()->route('index');
    }
}
