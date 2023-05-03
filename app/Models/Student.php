<?php

namespace App\Models;

use App\Models\Level;
use App\Models\Course;
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
    public function courses(){
        return $this->belongsToMany(Course::class);
    }
    public function level(){
        return $this->belongsTo(Level::class);
    }
    public function specialization(){
        return $this->belongsTo(Specialization::class);
    }
    public function advisor(){
        return $this->belongsTo(Advisor::class);
    }
}
