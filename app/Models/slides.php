<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class slides extends Model
{
    use HasFactory;

    protected $table="slides";
    protected $fillable=[
        'id',
       'slide',
       'course_id',
       'updated_at',
        'created_at',
    ];

    /**
     * Get the user that owns the slides
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(courseModel::class, 'course_id');
    }
}
