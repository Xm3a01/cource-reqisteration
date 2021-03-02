<?php

namespace App;

use App\Order;
use App\Category;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'name', 
        'description' , 
        'price' , 
        'category_id' , 
        'availableSize',
        'disCount',
        'unitPrice',
        'color',
        'productAmount',
        'admin_id',
        'fiexdAmount'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getImageAttribute()
    {
        return $this->getFirstMediaUrl('products');
    }

    public function getSellCountAttribute()
    {
        return $this->orders->count(); 
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // public function getImagesAttribute()
    // {
    //     return $this->getMedia('products')->getUrl();
    // }
}
