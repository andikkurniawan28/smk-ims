<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'password',
        'name',
        'address',
        'whatsapp',
        'email',
        'birthplace',
        'birthday',
        'university',
        'degree',
        'role_id',
        'teacher_id',
        'major_id',
        'subject_id',
    ];
    
}
