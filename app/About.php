<?php

namespace App;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class About extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['title' , 'content'];


   public function getImageAttribute()
   {
       return $this->getFirstMediaUrl('abouts');
   }
}
