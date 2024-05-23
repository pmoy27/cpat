<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'noti_practicadas',
        'etapas_notificaciones',
        'medio_notificacion',
        'medio_envio_comuni',
        'medio_envio_personales',
        'id_procedimiento'

    ];
}
