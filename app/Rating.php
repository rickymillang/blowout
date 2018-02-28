<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'ratings';

    protected $fillable = ['user_id','establishment_id','rating'];

	public function establishment()
	{
		return $this->belongsTo(Establishment::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
