<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre', 'apellido', 'dpi', 'id_tipo_usuario', 'id_departamento', 'fecha_inicio_labores', 'fecha_nacimiento'
    ];
}
