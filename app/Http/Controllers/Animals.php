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
    // public function create()
    // {
    //     return view("pages/petform");
    // }
    // public function createAnimal(Animal $animal)
    // {
    //     // dd("wibble");
    //     // get all of the submitted data
    //     $data = $request->all();
    //     // create a new article, passing in the submitted data
    //     $owner = Animal::create($data);
    //     // redirect the browser to the new article
    //     return redirect("/owners/{$owner->id}");
    // }
}
