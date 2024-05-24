<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'expediente_otro_organo',
        'medio_utilizado',
        'institucion',
        'tipo_informacion',
        'identifique_dato',
        'identifique_documento',
        'enviar_comunicaciones',
        'id_procedimiento'

    ];
}
