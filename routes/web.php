<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Owners;
use App\Http\Controllers\Animals;
use App\Http\Controllers\Home;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

// homepage
Route::get("/", "Homecontroller@index");

// Middleware is involved in security so that people can't access data without being a registered user.

Route::group(["middleware" => "auth"], function(){
    // Form page
    Route::get('/owners/create', "Owners@create");
    // Create Owner method
    Route::post('/owners/create', "Owners@createOwner");
    // Owners page
    Route::get('/owners', "Owners@index");
    // Owner page
    Route::get('/owners/{owner}', "Owners@show");
});

// Pets Page
Route::get('/pets', "Animals@index");
// pet page
Route::get('/pets/{animal}', "Animals@show");
// Show pet of owner
Route::post('{owner}', "Owners@animalPost");
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

