<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
	protected $fillable = ['establishment_id', 'name', 'price'];

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
        return $this->morphedByMany(Service::class, 'packgeable');
    }
}
