<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packageable extends Model
{
    protected $fillable = ['package_id', 'packageable_id', 'packageable_type'];
}
