<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceVenue extends Model
{
    protected $table = 'service_venue';

    protected $fillable = ['service_id', 'venue_id'];
}
