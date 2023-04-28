<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Advisor extends Model
{
    protected $primaryKey = 'advisor_id';
    public $incrementing = false;
    protected $keyType = 'string';
    use HasFactory;
    public function students(){
        return $this->hasMany(Student::class);
    }
    public function departments(){
        return $this -> belongsTo(Department::class);
    }
}
