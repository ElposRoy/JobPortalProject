<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Experience extends Model
{

    use HasFactory;

    protected $table = 'resume_experience';


    protected $fillable=[
        'rsm_id',
        'JobStarted',
        'JobEnded',
        'StillEmployed',
        'Company',
        'Position',
        'Location',
        'LocationType',
        'EmploymentType',
        'Description',
    ];

    public function resume(): BelongsTo

    {
        return $this->belongsTo(Resume::class);

    }
}
