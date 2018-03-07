<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageVenue extends Model
{
    protected $table = 'package_venue';

    protected $fillable = ['package_id', 'venue_id'];

    public function getPackage(){
        return $this->hasOne('App\Package','id','package_id');
    }
}
