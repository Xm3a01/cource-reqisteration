<?php

namespace App;

use App\Product;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements HasMedia
{

    use InteractsWithMedia;

    
    protected $fillable = ['name' , 'description'];



    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function getImageAttribute()
    {
        return $this->getFirstMediaUrl('categories');
    }
}
