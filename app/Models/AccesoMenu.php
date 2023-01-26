<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AccesoMenu extends Pivot
{
    use HasFactory;

    protected $table = 'acceso_menu';
    protected $primaryKey = 'id_acceso_menu';
    public $timestamps = false;

    protected $fillable = [
        'id_rol',
        'id_menu',
        'estado_acceso_menu',
        'fecha_reg_acceso_menu'
    ];

    // public function menu()
    // {
    //     return $this->belongsTo('App\Models\Menu','id_menu','id_menu');
    // }
}
