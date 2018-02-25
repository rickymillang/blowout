<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected  $table = 'orders';

    protected $fillable = ['user','product_order','delivery_address','delivery_date','payment_type','status'];
}
