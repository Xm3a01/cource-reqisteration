<?php

namespace App;

use App\Link;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Setting extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['name' , 'location' , 'email' , 'call'];



   public  function links() {
       return $this->morphMany(Link::class , 'linkable');
   }

   public function getImagesAttribute()
   {
       return $this->getMedia('settings');
   }

//    getFirstMediaUrl
}
