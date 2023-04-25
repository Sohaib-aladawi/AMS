<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    protected $primaryKey = 'specialization_id';
    public $incrementing = false;
    protected $keyType = 'string';
    //use HasFactory;
}
