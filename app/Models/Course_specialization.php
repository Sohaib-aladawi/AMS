<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course_specialization extends Model
{
    use HasFactory;
    public function students_courses(){
        return $this->belongsToMany(Student_course::class);
    }
    
}
