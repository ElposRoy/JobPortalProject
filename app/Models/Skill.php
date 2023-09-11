<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skill extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'resume_skill';



    protected $fillable=[
        'rsm_id',
        'Skill',
      
    ];

    public function resume(): BelongsTo

    {
        return $this->belongsTo(Resume::class);

    }


}
