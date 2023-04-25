<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey = 'department_id';
    public $incrementing = false;
    protected $keyType = 'string';
    use HasFactory;
    public function students(){
        return $this->hasMany(Student::class);
    }
}
