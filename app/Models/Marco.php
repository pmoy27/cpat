<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marco extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'n_ley',
        'url_ley',
        'fuentes_normativas',
        'tipo_fuente',
        'nombre_fuente',
        'url_fuente',
        'id_procedimiento'

    ];
}
