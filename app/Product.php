<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['establishment_id','name', 'description', 'product_type_id', 'price', 'image'];

    public function packages()
    {
    	return $this->morphToMany(Package::class, 'packageable');
    }

    public function product_type()
    {
    	return $this->belongsTo(ProductType::class);
    }
}
