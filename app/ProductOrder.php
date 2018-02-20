<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{

    protected $table = 'product_order';

    protected $fillable = ['item_id','item_type','quantity'];


}
