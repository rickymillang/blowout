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

    public function product_types(){
        return $this->hasMany('App\ProductType','establishment_id','id');
    }

    public function products(){
        return $this->hasMany('App\Product','establishment_id','id');
    }

    public function packages(){
        return $this->hasMany('App\Package','establishment_id','id');
    }

    public function services(){
        return $this->hasMany('App\Service','establishment_id','id');
    }

    public function totalRatings(){

        $sum = 0.00;

        if($this->ratings()->count()) {

            $sum = $this->ratings()->groupBy('establishment_id')->sum('rating') / $this->ratings()->count();
        }

        return $sum;
    }

    public function ratings(){
        return $this->hasMany('App\Rating','establishment_id','id');
    }

    public function getReviews(){
        return $this->hasMany('App\Review','establishment_id','id');
    }
}
