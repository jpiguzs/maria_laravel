<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicCicle extends Model
{
    use HasFactory;
    protected $table = 'academic_clicles';
    protected $fillable = ['name', 'year_id','active'];
   
    public function Year(){
        return $this->belongsTo(AcademicYear::class, 'year_id');
    }
}
