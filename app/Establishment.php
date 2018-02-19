<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    protected $fillable = ['establishment_type_id', 'name', 'description', 'address', 'image', 'dti_permit', 'phone', 'email', 'owner_name', 'business_permit', 'phone', 'status', 'user_id', 'latitude', 'longitude'];

    public function establishment_type()
    {
        return $this->belongsTo(EstablishmentType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
