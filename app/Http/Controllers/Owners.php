<?php

namespace App\Http\Controllers;

use App\Owner;

use Illuminate\Http\Request;

use App\Http\Requests\OwnerRequest;

use App\Animal;

class Owners extends Controller
{
    public function index()
    {

        return view("pages/owners",[
            // pass in all the articles
            'owners' => Owner::all(),
        ]);
    }
    public function show(Owner $owner)
    {
        return view("pages/owner", [
            "owner" => $owner
        ]); 
    }
    public function create()
    {
        return view("pages/form");
    }
    

    // accept the Request object
    // this gives us access to the submitted data
    public function createOwner(Request $request)
    {   
        // dd("wibble");
        // get all of the submitted data
        $data = $request->all();
        // create a new article, passing in the submitted data
        $owner = Owner::create($data);
        // redirect the browser to the new article
        return redirect("/owners/{$owner->id}"); 
    }
    // we need to accept Request first, using type hinting
    // and then use route model binding to get the relevant
    // article from the URL parameter
    // public function animalPost(Request $request, Owner $owner)
    // {
    // // create a new comment, passing in the data from the request JSON
    // $animal = new Animal($request->all());

    // // this syntax is a bit odd, but it's in the documentation // stores the comment in the DB while setting the article_id
    // $owner->animals()->save($comment);

    // // return the stored comment
    // return redirect("pages/owners/{$owner->id}"); 
    // }
}
