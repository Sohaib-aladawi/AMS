<?php

namespace App\Models;

use App\Models\Level;
use App\Models\Student;
use App\Models\Coures_specialization;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Specialization extends Model
{
    protected $primaryKey = 'specialization_id';
    public $incrementing = false;
    protected $keyType = 'string';
    use HasFactory;
    public function levels(){
        return $this->belongsTo(Level::class);
    }
    public function students(){
        return $this->hasMany(Student::class);
    }
    public function course_specializations(){
        return $this->belongsToMany(Coures_specialization::class);
    }
}
