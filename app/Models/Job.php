<?php

namespace App\Models;
use Illuminate\Support\Arr;

// El namespace nos sirve para agrupar las clases para evitar las colisiones, es decir podemos tener 2 clases llamadas Jobs pero si estan en distintos namespaces NO sucede
// Error
class Job{
    // Si ponemos ":" despues del metodo, es como especificamos el tipo de lo que devolvemos
    public static function all():array
    {
        return [
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
    }

    public static function find(int $id):array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);    // Lo hemos pasado aquí porque tiene más sentido operar sobre Job si estamos en la propia clase
        // Controlamos el caso en que usuario no encuentre el trabajo
        if(!$job){
            abort(404);     // Mostramos el mensaje de que no lo hemos encontrado
        }
        return $job;
    }
}