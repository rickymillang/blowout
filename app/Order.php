<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected  $table = 'orders';

    protected $fillable = ['user','establishment_id','product_order','delivery_address','delivery_date','payment_type','status'];

    public function product_orders()
    {
    	return $this->hasMany(ProductOrder::class);
    }

    public function users()
    {
    	return $this->belongsTo(User::class, 'user', 'id');
    }

    public function payment_types()
    {
    	return $this->belongsTo(PaymentMethod::class, 'payment_type', 'id');
    }

    public function statuses()
    {
    	return $this->belongsTo(OrderStatus::class, 'status', 'id');
    }
}
