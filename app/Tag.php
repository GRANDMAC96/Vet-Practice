<?php

namespace App;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // don't need timestamps
    // no idea why this one is public
    public $timestamps = false;

    // using the belongsToMany() method
    // as it's a many-to-many relationship 
    public function owners()
    {
        return $this->belongsToMany(Owner::class); 
    }
}
