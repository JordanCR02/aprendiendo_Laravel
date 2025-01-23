<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// When u visit home page --> we run function() --> we return the view "welcome"
Route::get('/', function () {
    return view('home');
});

// Cuando el usuario visite aprendiendo.test/about devolvemos un mensaje pq de momento no tenemos una view
Route::get('/jobs', function(){
    return view('jobs',[
        'jobs' =>[
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$100.000'
            ],
            [
                'id' => 2,
                'title' => 'Pro Boxer',
                'salary' => '$60.000'
            ],
            [
                'id' => 3,
                'title' => 'Programmer',
                'salary' => '$80.000'
            ]
        ]
    ]);
});

// Creamos una ruta para direccionar los trabajos a su propia view segun su id
Route::get('/jobs/{id}', function($id){
    $jobs = [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$100.000'
            ],
            [
                'id' => 2,
                'title' => 'Pro Boxer',
                'salary' => '$60.000'
            ],
            [
                'id' => 3,
                'title' => 'Programmer',
                'salary' => '$80.000'
            ]
    ];
    // Basicamente aquí estamos usando una función d un framework q nos permite buscar en arrays de la libreria Illuminate
    // Lo que hace es iterar la lista hasta que encuentra un "job" con el id al que le hemos pasado a la ruta (el que depende de la cabecera)
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function(){
    return view('contact');
});
