<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// El namespace nos sirve para agrupar las clases para evitar las colisiones, es decir podemos tener 2 clases llamadas Jobs pero si estan en distintos namespaces NO sucede
// Error
class Job extends Model{
    use HasFactory;
    protected $table = 'job_listings';

    // Estos serán los 2 atributos pueden ser asignados de forma masiva, sirve para decir cuales pueden ser modificados por usuarios de forma multiple
    // La gracia sería que las cosas que sean de seguridad que no sean fillable
    protected $fillable = ['title', 'salary'];
}