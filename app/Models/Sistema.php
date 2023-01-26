<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    use HasFactory;

    protected $table = 'sistema';
    protected $primaryKey = 'id_sistema';
    public $timestamps = false;

    protected $fillable = [
        'nombre_sistema',
    ];

    public function roles()
    {
        return $this->hasMany('App\Models\Rol','id_sistema','id_sistema');
    }

    public function menus()
    {
        return $this->hasMany('App\Models\Menu','id_sistema','id_sistema');
    }
    // public function roles()
    // {
    //     return $this->belongsTo('App\Models\Rol','id_rol','id_sistema');
    // }
}
