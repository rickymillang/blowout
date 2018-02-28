<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['amount', 'order_id', 'establishment_id', 'user_id'];

    public function order()
    {
    	return $this->belongsTo(Order::class);
    }

    public function establishment()
    {
    	return $this->belongsTo(Establishment::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
