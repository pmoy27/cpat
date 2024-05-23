<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class procedimiento extends Model
{
    use HasFactory;
    public function identificacion()
    {
        return $this->hasMany(identificacion::class, 'id_procedimiento');
    }

    public function marcos()
    {
        return $this->hasMany(Marco::class, 'id_procedimiento');
    }
}
