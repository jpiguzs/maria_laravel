<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'ci',
        'b_date',
        'type_user',
        'password',
        'secction_id'
    ];
    protected $appends = ['age'];

        public function getAgeAttribute()
        {
                return Carbon::parse($this->attributes['birthday'])->age;
        }
    
    public function Courses()
    {
        return $this->morphedByMany(Courses::class, 'teacher_courses');
    }
    
    public function Seccion()
    {
        return  $this->belongsTo(Secction::class,'secction_id');
    }
   
    public function Grades()
    {
        return $this->morphedByMany(Courses::class, 'grades_teachers');
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
}
