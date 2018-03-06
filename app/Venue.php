<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{

	protected $fillable = ['name', 'address', 'minimum_capacity', 'maximum_capacity', 'establishment_id', 'image', 'price'];


    public function event_types()
    {
    	return $this->belongsToMany(EventType::class);
    }

    public function establishment()
    {
    	return $this->belongsTo(Establishment::class);
    }

    public function packages()
    {
    	return $this->belongsToMany(Package::class);
    }

    public function services()
    {
    	return $this->belongsToMany(Service::class);
    }
}
