<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


// Modelo que representa la tabla proyectos en la base de datos.
// Permite trabajar con los registros de proyectos utilizando Eloquent de Laravel.
class Proyecto extends Model
{

    // Indica los campos que pueden ser registrados o modificados
    // mediante creación masiva de datos.
    protected $fillable = [
        'nombre',
        'fecha_inicio',
        'estado',
        'responsable',
        'monto'
    ];

}
