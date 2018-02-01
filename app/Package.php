<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function products()
    {
        return $this->morphedByMany(Product::class, 'packageable');
    }

    public function services()
    {
        return $this->morphedByMany(Service::class, 'packgeable');
    }
}
