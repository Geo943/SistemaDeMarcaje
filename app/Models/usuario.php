<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    protected $fillable = [
        //'id_usuario',
         'usuario','id_tipo_usuario','id_empleado','contrasena'
    ];
}
