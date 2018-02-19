<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected  $table = 'order';

    protected $fillable = ['user','product_order','delivery_address','date_deliver','payment_type','status'];
}
