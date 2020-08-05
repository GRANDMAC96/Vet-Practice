<?php

use Illuminate\Support\Facades\Route;

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
 
// homepage
Route::get("/", "Home@index");
// about page
Route::get('about', function(){
    return view('about');
});

// Owners page
Route::get('/owners', "Owners@index");

// Form page
Route::get('/form', "Owners@create");

// Create Owner method

Route::post('/owners/form', "Owners@createOwner");

// Owner page
Route::get('/owners/{owner}', "Owners@show");

// Pets Page
Route::get('/pets', "Animals@index");
// pet page
Route::get('/pets/{animal}', "Animals@show");


// Show pet of owner
// Route::post('{owner}', "Owners@animalPost");





// This id is the one that gets past to the method in controller
