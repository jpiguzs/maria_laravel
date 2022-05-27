<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $table="courses";
    protected $fillable = ['name'];

    public function Teachers()
    {
        return $this->morphedByMany(Courses::class, 'teacher_courses');
    }
    public function Grades(){
        return $this->morphedByMany(Courses::class, 'grades_courses');
    }
}
