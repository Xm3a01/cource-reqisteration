<?php

namespace App;

use App\User;
use App\Admin;
use App\Student;
use App\Trainer;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Course extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['name' , 'h_week' , 'feeses' , 'description' , 'admin_id' , 'seats' , 'trainer_id' , 'period'];

    public function students()
    {
        return $this->belongsToMany(User::class , 'courses_user');
    }

    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }

    public function manager()
    {
        return $this->belongsTo(Admin::class);
        
    }
    public function getImageAttribute()
    {
        return $this->getFirstMediaUrl('courses');
    }

    public function GetstudentCoursesAttribute()
    {
        return $this->users != null;
           
    }
}
