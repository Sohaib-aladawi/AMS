<?php

namespace App\Models;


use App\Models\Student;
use App\Models\Advaisor;
use App\Models\Coures_specialization;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    protected $primaryKey = 'department_id';
    public $incrementing = false;
    protected $keyType = 'string';
    use HasFactory;
    public function students(){
        return $this->hasMany(Student::class);
    }
    public function courses_specialization(){
        return $this->belongsToMany(Coures_specialization::class);
    }
    public function advisors(){
        return $this->hasMany(Advaisor::class);
    }
}
