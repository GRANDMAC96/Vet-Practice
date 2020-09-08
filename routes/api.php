<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Owners;
use App\Http\Controllers\API\Animals;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//api route for all owners 
Route::get("/owners", [Owners::class, "index"]);
// ->middleware('auth:api');
// api route for one owner
Route::get("/owners/{owner}", [Owners::class, "show"]);
// api route for deleting owner
Route::delete("/owners/{owner}", [Owners::class, "delete"]);
// api route for creating new owner
Route::post("/owners", [Owners::class, "store"]);

// api route for all animals
Route::get("/pets", [Animals::class, "index"]);
// api route for one animal
Route::get("/pets/{animal}", [Animals::class, "show"]);
// api route for deleting animal
Route::delete("/pets/{animal}/destroy", [Animals::class, "destroy"]);
// api route for creating new animal
Route::post("/pets", [Animals::class, "store"]);


