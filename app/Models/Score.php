<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected $table="scores";
    protected $fillable = ['academic_cicle_id', 'student_id', 'course_id', 'secction_id','score'];


    /**
     * Get the user that owns the Score
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    /**
     * Get the user that owns the Score
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Secction(): BelongsTo
    {
        return $this->belongsTo(Secctions::class, 'secction_id');
    }
    /**
     * Get the user that owns the Score
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
    
    /**
     * Get the user that owns the Score
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function AcademicCicle(): BelongsTo
    {
        return $this->belongsTo(AcademicCicle::class, 'academic_cicle_id', );
    }
}
