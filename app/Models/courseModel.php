<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class courseModel extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'subject_id',
        'name',
        'description',
        'avg_duration',
        'slug',
        'headline',
        'outcomes',
        'status',
        'created_at',
    ];


    protected $table = "course";

    public $timestamps = false;

    /**
     * Get all of the comments for the courseModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function slides(): HasMany
    {
        return $this->hasMany(slides::class, 'course_id');
    }
}
