<?php

namespace App;

use App\Link;
use App\Course;
use App\MediaLink;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Trainer extends Model implements HasMedia
{
    use InteractsWithMedia;

    
    protected $fillable = ['name' , 'job_title' , 'description'];


    public function links()
    {
        return $this->hasMany(Link::class);
    }
    public function courses()
    {
        $this->hasMany(Course::class);
    }

    public function getImageAttribute()
    {
        return $this->getFirstMediaUrl('trainers');
    }
}
