<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soporte extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nivel_digitalizacion',
        'fecha_digitalizacion',
        'canales_atencion',
        'canales_transaccionales',
        'url_inicio',
        'tipo_expediente',
        'acceso_expediente',
        'chile_atiende',
        'url_ficha',
        'n_plataformas',
        'alcance_plataformas',
        'plataforma_utilizado',
        'id_procedimiento'

    ];
}
