<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Resume extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'resumes'; // For checking if the user has a resume created 



    protected $fillable=[
        'user_id',
        'Image',
        'Gender',
        'Citizenship',
        'LastName',
        'FirstName',
        'MiddleName',
        'Suffix',
        'Age',
        'BirthDate',
        'BirthPlace',
        'BloodType',
        'CivilStatus',
        'Address',
        'PhoneNumber',
        'Email',
        'CareerObjective',
        'Weight',
        'Height',

        'Skill',
        'Education',
        'Experience',
    ];

    public function user(): BelongsTo

    {
        return $this->belongsTo(User::class);

    }

    public function education()

    {
        return $this->hasMany(Education::class);

    }


}
