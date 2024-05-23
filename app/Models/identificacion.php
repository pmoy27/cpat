<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class identificacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'area_responsable',
        'cargo_responsable',
        'tipo_inicio',
        'acto_inicio',
        'acto_termino',
        'producto_institucional',
        'id_procedimiento'

    ];
}
