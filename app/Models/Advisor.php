<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Advisor extends Authenticatable
{
    protected $table = 'advisors';
    protected $primaryKey = 'advisor_id';
    public $incrementing = false;
    protected $keyType = 'string';
    use HasFactory;
    public function students(){
        return $this->hasMany(Student::class);
    }
    public function department(){
        return $this -> belongsTo(Department::class);
    }
}
