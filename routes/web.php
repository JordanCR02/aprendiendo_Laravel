<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;



// When u visit home page --> we run function() --> we return the view "welcome"
Route::get('/', function () {
    return view('home');
});

// Cuando el usuario visite aprendiendo.test/about devolvemos un mensaje pq de momento no tenemos una view
Route::get('/jobs', function(){
    return view('jobs',[
            'jobs' => Job::all()        // Ahora usamos el array de la clase
    ]);
});

// Creamos una ruta para direccionar los trabajos a su propia view segun su id
Route::get('/jobs/{id}', function($id){
    
    // Basicamente aquí estamos usando una función d un framework q nos permite buscar en arrays de la libreria Illuminate
    // Lo que hace es iterar la lista hasta que encuentra un "job" con el id al que le hemos pasado a la ruta (el que depende de la cabecera)
    $job = Job::find($id);                  // Ahora usamos un metodo de la clase Job para que así quede más limpio
    return view('job', ['job' => $job]);
});

Route::get('/contact', function(){
    return view('contact');
});
