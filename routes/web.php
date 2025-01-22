<?php

use Illuminate\Support\Facades\Route;

// When u visit home page --> we run function() --> we return the view "welcome"
Route::get('/', function () {
    return view('home');
});

// Cuando el usuario visite aprendiendo.test/about devolvemos un mensaje pq de momento no tenemos una view
Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});
