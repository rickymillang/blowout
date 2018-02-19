<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';

    protected $fillable = ['item_id','item_type','quantity','user','organize_from'];


    public function getItemType(){
        return $this->hasOne('App\ItemType','id','item_type');
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
