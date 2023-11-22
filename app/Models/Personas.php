<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    use HasFactory;

    protected $table = 'Personas';

    protected $fillable = [
        'VC_NOMBRE',
        'VC_APELLIDO_PATERNO',
        'VC_APELLIDO_MATERNO',
        'VC_NOMBRECOMPLETO',
        'VC_DNI',
        'VC_USUARIO_CREACION',        
        'BT_ESTADO_FILA',
    ];
}
