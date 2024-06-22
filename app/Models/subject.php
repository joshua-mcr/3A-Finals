<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'subject_code',
        'name',
        'description',
        'instructor',
        'schedule',
        'grades',
        'prelim',
        'midterm',
        'prefinal',
        'final',
        'date_taken'
    ];
}
