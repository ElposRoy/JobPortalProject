<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Education extends Model
{
    use HasFactory;

    protected $table = 'resume_education';

    protected $fillable=[
        'rsm_id',
        'Level',
        'StartDate',
        'EndDate',
        'School',
        'Address',
        'Degree',
        'Description',
    ];

    public function resume(): BelongsTo

    {
        return $this->belongsTo(Resume::class);

    }


}
