<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['user','name', 'description', 'product_type_id', 'price', 'image'];
}
