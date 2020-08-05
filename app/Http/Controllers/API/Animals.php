<?php

namespace App\Http\Controllers\API;

use App\Animal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\API\AnimalRequest;
use App\Treatment;
use App\Http\Resources\API\AnimalResource;

class Animals extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Animal::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnimalRequest $request)
    {
        // dd("store");
        // get all the request data
        // returns an array of all the data the user sent
        $data = $request->all([]);

        // create article with data and store in DB
        // and return it as JSON
        // automatically gets 201 status as it's a POST request
        $animal = Animal::create($data)->setTreatments($request->get("treatments"));
        
        // $treatments = Treatment::fromStrings($request->get("treatments"));

        return new AnimalResource($animal);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        return $animal;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($animal)
    {
        $animal->delete();
        // use a 204 code as there is no content in the response
        return response(null, 204);
    }
}
