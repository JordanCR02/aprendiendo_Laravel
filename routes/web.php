<?php

use Illuminate\Support\Facades\Route;

// When u visit home page --> we run function() --> we return the view "welcome"
Route::get('/', function () {
    return view('welcome');
});
