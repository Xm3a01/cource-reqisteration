<?php

namespace App;

use Carbon\Carbon;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Ads extends Model implements HasMedia
{
    use  InteractsWithMedia;

    protected $fillable = [
        'name',
        'content',
        'place',
        'date'
    ];

    public function getImageAttribute()
    {
        return $this->getFirstMediaUrl('events');
    }

    public function getDateAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d\TH:i');
    }
}
