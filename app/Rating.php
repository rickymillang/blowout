<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
	public function establishment()
	{
		return $this->belongsTo(Establishment::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
