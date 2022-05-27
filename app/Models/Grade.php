<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $table="grades";
    protected $fillable = ['name'];

    /**
     * Get all of the comments for the Grade
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Secctions()
    {
        return $this->hasMany(Secctions::class);
    }


}
