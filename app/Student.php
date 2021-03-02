<?php

namespace App;

use App\User;
use App\Course;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillabe = [
        'address',
        'gender',
        'birthday',
        'level',
        'job_title',
        'course_time',
        'user_id',
        'whenWasthat',
        'whatsapp',
        'email'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}