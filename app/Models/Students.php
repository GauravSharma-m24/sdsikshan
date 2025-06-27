<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    // Tell Laravel to use 'student' instead of default 'students'
    protected $table = 'student';
    protected $fillable = [
    'name', 'email', 'password', 'dob', 'phone', 'class', 'section'
];

    protected $hidden = ['password'];
}
