<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'totalPrice' , 'quantity' , 'user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
