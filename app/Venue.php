<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
	protected $fillable = ['name', 'address','price' ,'minimum_capacity', 'maximum_capacity', 'establishment_id', 'image'];

    public function event_types()
    {
    	return $this->belongsToMany(EventType::class);
    }

    public function establishment()
    {
    	return $this->belongsTo(Establishment::class);
    }
}
