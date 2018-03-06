<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventTypeVenue extends Model
{
	protected $table = 'event_type_venue';

	protected $fillable = ['event_type_id', 'venue_id'];
}
