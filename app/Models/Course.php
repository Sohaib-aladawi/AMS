<?php

namespace App\Models;

use App\Models\Specialization;
use App\Models\Course_specialization;
use App\Models\Student_coures;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    protected $primaryKey = 'course_id';
    public $incrementing = false;
    protected $keyType = 'string';
    use HasFactory;
    public function students_courses(){
        return $this->belongsToMany(Student_coures::class);
    }
    public function course_specializations(){
        return $this->belongsToMany(Course_specialization::class);
    }
}
