<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceVenue extends Model
{
    protected $table = 'service_venue';

    protected $fillable = ['service_id', 'venue_id'];

    public function getService(){
        return $this->hasOne('App\Service','id','service_id');
    }
}
