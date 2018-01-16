<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstablishmentType extends Model
{
    protected $table = 'establishment_types';

    protected  $fillable = ['name'];
}
