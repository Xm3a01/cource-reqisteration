<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ['name' , 'link' , 'trainer_id' , 'icon'];


    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }
}
