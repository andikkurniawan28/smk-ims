<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_name',
        'major_id',
        'classroom_id',
        'internship_id',
        'address',
        'sex',
        'religion',
        'birthplace',
        'birthday',
        'whatsapp',
        'email',
        'father',
        'name',
    ];
}
