<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    protected $fillable = ['name', 'establishment_id'];

    public function establishment()
    {
    	return $this->belongsTo(Establishment::class);
    }

    public function venues()
    {
    	return $this->belongsToMany(Venue::class);
    }
}
