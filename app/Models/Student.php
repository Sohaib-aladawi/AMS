<?php

namespace App\Models;

use App\Models\User;
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
    protected $fillable = [
        'student_id',
        'student_name',
        'phon',
        'email',
        'current_CGPA',
        'department_id',
        'advisor_id',
        'EL4SCORE',
        'specialization_id',
        'status',
        'IELTSSCORE',
        
    ];
    use HasFactory;
    public function scopeFilter($query , array $filters ){
        if($filters['search'] ?? false){
            $query -> where('student_id','like','%'. request('search').'%')
                   -> orWhere('student_name','like','%'. request('search').'%')
                   -> orWhere('phon','like','%'. request('search').'%');
           } 
    }
    public function courses(){
        return $this->belongsToMany(Course::class,'student_course','student_id','course_id')->withpivot('status','version');
    }
    public function level(){
        return $this->belongsTo(Level::class);
    }
    public function specialization(){
        return $this->belongsTo(Specialization::class, 'specialization_id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
