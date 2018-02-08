<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['to_user_id', 'from_user_id', 'message'];

    public function sender()
    {
    	return $this->belongsTo(User::class, 'from_user_id');
    }

    public function receiver()
    {
    	return $this->belongsTo(User::class, 'to_user_id');
    }
}
