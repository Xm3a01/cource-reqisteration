<?php

namespace App;

use App\Link;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Setting extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['name'];



   public  function links() {
       return $this->morphMany(Link::class , 'linkable');
   }

   public function getImageAttribute()
   {
       return $this->getFirstMediaUrl('settings');
   }
}
