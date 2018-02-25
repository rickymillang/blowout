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

    public function getItem(){

        if($this->item_type == 1){
            return $this->hasOne('App\Product','id','item_id');
        }elseif($this->item_type == 2){
            return $this->hasOne('App\Service','id','item_id');
        }elseif($this->item_type == 3){

            return $this->hasOne('App\Package','id','item_id');
        }
    }

}
