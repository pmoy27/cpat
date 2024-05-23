<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'pago_asociado',
        'tipo_moneda',
        'monto_pagar',
        'tipo_usuario',
        'segmento_usuario',
        'registro_social',
        'disponibilidad',
        'id_procedimiento'

    ];
}
