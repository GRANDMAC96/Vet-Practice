<?php

namespace App;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;


class Treatment extends Model
{
    // don't need timestamps
    // no idea why this one is public
    public $timestamps = false;

    // using the belongsToMany() method
    // as it's a many-to-many relationship 
    public function animals()
    {
        return $this->belongsToMany(Animal::class); 
    }
    protected $fillable = ["name"];

    static public function fromString(string $string) : Treatment
    {
        $treatment = Treatment::where("name", $string)->first();
        return $treatment ? $treatment : Treatment::create(["name" => $string]);
    }
    static public function fromStrings(array $strings) : Collection
    {
        return collect($strings)->map([Treatment::class, "fromString"]); 
    }
}
