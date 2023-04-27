<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Specialization;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Level extends Model
{
    use HasFactory;
    public function students(){
        return $this->hasMany(Student::class);
    }
    public function specializations(){
        return $this->hasMany(Specialization::class);
    }


}
