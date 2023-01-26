<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PermisoUsuario extends Pivot
{
    use HasFactory;

    protected $table = 'permiso_usuario';
    protected $primaryKey = 'id_permiso_usuario';
    public $timestamps = false;

    protected $fillable = [
        'id_rol',
        'id_usuario',
        'estado_permiso_usuario',
    ];


}
