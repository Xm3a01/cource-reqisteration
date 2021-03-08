<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ['name' , 'link' , 'trainer_id' , 'icon' , 's_icon'];


    public function linkable()
    {
        return $this->morphTo();
    }
}
