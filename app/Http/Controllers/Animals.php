<?php

namespace App\Http\Controllers;

use App\Animal;
// use App\Owner;
use Illuminate\Http\Request;
use App\Http\Requests\AnimalRequest;


class Animals extends Controller
{
    public function index()
    {
        return view("pages/pets",[
        // pass in all the articles
        'animals' => Animal::all(),
        ]);
    }
    public function show(Animal $animal)
    {
        return view("pages/pet", [
            "animal" => $animal
        ]); 
    }
}
