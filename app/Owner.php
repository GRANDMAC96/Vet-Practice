<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = ["first_name", "last_name", "address_1", "address_2", "town", "postcode", "telephone"];

    public function fullName()
    {
        return $this->first_name . " " . $this->last_name;
    }
    public function fullAddress()
    {
        return $this->address_1 . " " . $this->address_2 . " " . $this->town . " " . $this->postcode;
    }
    public function animals()
    {
    // use hasMany relationship method
    return $this->hasMany(Animal::class); 
    }
    public function validPhoneNumber(float $num)
    {
        return preg_match("/^[0-9-]+$/", $num) === 1;
    }
    public function numberOfPets()
    {
        // return number of animals that this owner model has associated with it.
        return $this->animals->count();
    }
}


