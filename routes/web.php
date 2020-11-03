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


// Middleware is involved in security so that people can't access data without being a registered user.

Route::get('/', function () {
    return view('app');
});

// Create owner page
Route::get('/owners/create', "Owners@create");
// Create Owner method
Route::post('/owners/create', "Owners@createOwner");
// Owners page
Route::get('/owners', "Owners@index");
// Owner page
Route::get('/owners/{owner}', "Owners@show");

// Create pet page
Route::get('/animals/create', "Animals@create");
// Create animal method
Route::post('animals/create', "Animals@createAnimal");
// Pets Page
Route::get('/animals', "Animals@index");
// Pet page
Route::get('/animals/{animal}', "Animals@show");


// Show pet of owner
// Route::post('{owner}', "Owners@animalPost");
// Show animal properties
// Route::get('animals/{animal}', "Animals@animalProperties");

Route::group(["middleware" => "auth"], function(){   
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
