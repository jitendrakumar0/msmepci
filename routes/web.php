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

Route::get('/', function () {
    return view('index');
})->name('index');;

// Route::get('/pallavi', function () {
//     return view('pallavi');
// })->name('pallavi');;

Route::get('/mohit', function () {
    return view('mohit');
})->name('mohit');;

Route::get('/shubham', function () {
    return view('shubham');
})->name('shubham');;

Route::get('/shivtej', function () {
    return view('shivtej');
})->name('shivtej');;

Route::get('/about', function () {
    return view('about');
})->name('about');;

Route::get('/gallary', function () {
    return view('gallary');
})->name('gallary');;

Route::get('/news', function () {
    return view('news');
})->name('news');;

Route::get('/contact', function () {
    return view('contact');
})->name('contact');;

Route::get('/blog', function () {
    return view('blog');
})->name('blog');;

Route::get('/whatsmsme', function () {
    return view('whatsmsme');
})->name('whatsmsme');;

Route::get('/upcomingEvent', function () {
    return view('upcomingEvent');
})->name('upcomingEvent');;

