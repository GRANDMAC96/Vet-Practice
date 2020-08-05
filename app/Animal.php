<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ["name", "species", "date_of_birth", "weight", "height", "biteyness", "owner_id"];

    // setup the other side of the relationship
    // use singular, as a comment only has one article
    public function owner()
    {
        // a comment belongs to an article
        return $this->belongsTo(Owner::class); 
    }
    public function dangerous()
    {
        if ($this->biteyness > 3){
            return "Animal bites";
        }
    }
    public function animalName()
    {
        return $this->name; //. " " . $this->species;
    }
    public function animalProperties()
    {
        return "Species;" . " " . $this->species . " " . "Date of Birth;" . " " . $this->date_of_birth;
    }
    // Tell owner model more about treatments.
    // Use the belongsToMany() method again.
    public function treatments()
    {
        return $this->belongsToMany(Treatment::class); 
    }

    // just accept an array of strings
    // we don't want to pass request in as there's no
    // reason models should know about about the request
    public function setTreatments(array $strings) : Animal
    {
        $treatments = Treatment::fromStrings($strings);

        // we're on an animal instance, so use $this 
        // pass in collection of IDs 
        $this->treatments()->sync($treatments->pluck("id"));

        // return $this in case we want to chain
        return $this;
    }
}
