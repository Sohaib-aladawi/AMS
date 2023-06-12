<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    
    protected $primaryKey = 'advisor_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'advisor_id',
        'advisor_code',
        'advisor_name',
        'email',
        'password',
        'role',
        'department_id',
    ];
    public function scopeFilter($query , array $filters ){
        if($filters['search'] ?? false){
            $query -> where('advisor_code','like','%'. request('search').'%')
                   -> orWhere('advisor_name','like','%'. request('search').'%');
           } 
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function students(){
        return $this->hasMany(Student::class);
    }
    public function department(){
        return $this -> belongsTo(Department::class);
    }
}
