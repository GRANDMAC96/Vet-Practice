<?php

namespace App\Http\Controllers\API;

use App\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\API\OwnerRequest;
use App\Http\Resources\API\OwnerResource;


class Owners extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //  This should render a list of the resource

    public function index()
    {
        return Owner::all();
        // return "wibble";
    }
    
    
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(OwnerRequest $request)
    {        
        // get all the request data
        // returns an array of all the data the user sent
        $data = $request->all();

        // create article with data and store in DB
        // and return it as JSON
        // automatically gets 201 status as it's a POST request
        $owner = Owner::create($data);
        return redirect("/owners/{$owner->id}"); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  Show a single resource
    public function show(Owner $owner)
    {
        // return the resource
        return new OwnerResource($owner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OwnerRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Owner $owner)
    {
        $owner->delete();

        return response(null, 204);
    }
    public function edit()
    {

    }
}
