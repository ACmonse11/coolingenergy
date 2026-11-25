<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';

    protected $fillable = [
        'slug',
        'numero',
        'nombre',
        'ubicacion',
        'periodo',
        'especialidad',
        'tipo',
        'categoria',
        'descripcion',
        'alcance',
        'imagen_principal',
        'galeria',
        'publicado',
        'orden',
    ];

    protected $casts = [
        'galeria' => 'array',
        'publicado' => 'boolean',
        'orden' => 'integer',
    ];
}
