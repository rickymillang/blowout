<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = ['establishment_id', 'name', 'description', 'price'];

    public function packages()
    {
    	return $this->morphToMany(Package::class, 'packageable');
    }
}
