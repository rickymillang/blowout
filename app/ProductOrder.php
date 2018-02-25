<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{

    protected $table = 'product_order';

    protected $fillable = ['order_id','item_id','item_type','quantity'];

    public function getOrder(){
        return $this->belongsTo('App\Order','id','order_id');
    }


}
