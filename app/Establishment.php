<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    protected $table = 'establishment';

    protected $fillable = ['e_type','name','address'];
}
