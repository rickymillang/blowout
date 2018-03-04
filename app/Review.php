<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    protected $fillable = ['user_id','establishment_id','reviews'];

    public function getUser(){
        return $this->hasOne('App\User','id','user_id');
    }


        //
}
