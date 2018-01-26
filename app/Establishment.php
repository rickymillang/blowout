<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    protected $table = 'establishments';

    protected $fillable = ['e_type','name','address','image'];

    public function establishment_type()
    {
        return $this->belongsTo(EstablishmentType::class, 'e_type');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
