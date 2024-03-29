<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route Grouping


// Route::group(['prefix' => 'customer'], function() {
//     Route::get('/', function() {
//         return "<h1>Customer List</h1>";
//     });

//     Route::get('/create', function() {
//         return "<h1>Customer Create</h1>";
//     });

//     Route::get('/show', function() {
//         return "<h1>Customer Show</h1>";
//     });
// });


Route::get('/', function () {
    return view('home');
});

/* Passing and Rendering */
Route::get('/about', function () {
    $a = 1 + 1;
    $b = "wives";
    // return view('about', ['about' => $about ]);
    return view('about', compact('a', 'b')); // ['about => $about]
});
Route::get('/contact', function () {
    return "<h1>Contact Page</h1>";
});

/* Fallback Route */
Route::fallback(function(){
    return "Route not exists";
});








// Route::get('about', function() {
//     return "<h1>Contact Page</h1>";
// });

// Route::get('contact', function () {
//     return view('<h1>Contact Page</h1>');
// });

// Route::get('contact/{id}', function ($id) {
//     return $id;
// })->name('edit-contact');


// Route::get('home', function() {
//     return "<a href='".route('edit-contact', 1)."'>About</a>";
// });



