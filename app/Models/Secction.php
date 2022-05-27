<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secction extends Model
{
    use HasFactory;
    protected $table ='secctions';
    private $fillable = ['name', 'grade_id'];

    
    
    public function Grade(){
        return $this->belongsTo(Grade::class, 'grade_id');
    }
}
