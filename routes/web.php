<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index']);
Route::get('about-us', [MainController::class, 'about_us']);
Route::get('contact-us', [MainController::class, 'contact_us']);

/* //Route mainly used two parameters: URI(location) and controller method(function )
Route::get('about-us', function () {
return 'This is about us page ----> '.route('contact');
// .route('contact'); referencing the named route
})->name('about'); */

//passing parameters to route
Route::get('news-details/{id}', function ($id) {
// $id is a parameter passed to the route. using the id from the URI in the function
return 'This is news details page with id: '.$id;    
});

/* Route::get('contact-us', function () {
return 'This is contact us page';
//giving name to route for easy reference
})->name('contact'); */
