<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
	protected $fillable = ['establishment_id', 'name', 'price', 'description'];

	public function establishment()
	{
		return $this->belongsTo(Establishment::class);
	}

    public function products()
    {
        return $this->morphedByMany(Product::class, 'packageable');
    }

    public function services()
    {
        return $this->morphedByMany(Service::class, 'packageable');
    }

    public function getEstablishment(){
        return  $this->hasOne('App\Establishment','id','establishment_id');
    }
}
