<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    protected $fillable = ['establishment_type_id', 'name', 'description', 'address', 'image', 'dti_permit', 'phone', 'email', 'owner_name', 'business_permit', 'phone', 'status', 'user_id'];

    public function establishment_type()
    {
        return $this->belongsTo(EstablishmentType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product_types(){
        return $this->hasMany('App\ProductType','establishment_id','id');
    }

    public function products(){
        return $this->hasMany('App\Product','establishment_id','id');
    }
}
