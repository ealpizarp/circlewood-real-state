<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// All Listings

Route::get('/', [ListingController::class, 'index']);


//Show create form

Route::get('/listings/create', [ListingController::class, 'create']);

// Single Listing

Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Store Listing data

Route::post('/listings', [ListingController::class, 'store']);

//Show Edit Form

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update listing

Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete listing

Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Route::get("/hello", function() {
//     return response('<h1>Hello World</h1>', 200)
//     ->header("Content-Type", 'text/plain');
// });

// Route::get('/posts/{id}', function($id) {
//     ddd($id);
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     return($request ->name . ' ' . $request->city);
// });