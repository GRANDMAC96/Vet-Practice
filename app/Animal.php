<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    // Mass Assignment Vulnerability; By adding this protected property to the data you are adding a layer of security to your database.
    protected $fillable = ["name", "species", "date_of_birth", "weight", "height", "biteyness"];
    public function animalName()
    {
        return $this->name;
    }
    public function animalSpecies()
    {
        return $this->species;
    }
}
