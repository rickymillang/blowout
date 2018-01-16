<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    protected $table = 'establishments';

    protected $fillable = ['e_type','name','address','image'];
}
