<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_course extends Model
{
    protected $fillable = [
        'status',
        
    ];

    use HasFactory;
    protected $table = 'student_course';
}
