<?php

namespace App\Models;

use App\Models\Level;
use App\Models\Advisor;
use App\Models\Specialization;
use App\Models\Student_coures;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    protected $primaryKey = 'student_id';
    public $incrementing = false;
    protected $keyType = 'string';
    use HasFactory;
    public function students_courses(){
        return $this->belongsToMany(Student_coures::class);
    }
    public function levels(){
        return $this->belongsTo(Level::class);
    }
    public function specializations(){
        return $this->belongsTo(Specialization::class);
    }
    public function advisors(){
        return $this->belongsTo(Advisor::class);
    }
}
