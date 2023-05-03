<?php

namespace App\Models;
use App\Models\Student;
use App\Models\Specialization;
use App\Models\Course_specialization;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    protected $primaryKey = 'course_id';
    public $incrementing = false;
    protected $keyType = 'string';
    use HasFactory;
    public function specializations(){
        return $this->belongsToMany(Specialization::class,'course_specializations','course_id','specialization_id');
    }
    public function informations(){
        return $this->hasMany(Course_specialization::class);
    }
    public function students(){
        return $this->belongsToMany(Student::class);
    }
}
