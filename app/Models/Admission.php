<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $fillable = [
    'student_name', 'dob', 'gender', 'father_name', 'mother_name', 'parent_occupation',
    'phone', 'email', 'address', 'class', 'section', 'previous_school', 'aadhar',
    'nationality', 'blood_group', 'emergency_contact_name', 'emergency_contact_phone'
    ];
}
