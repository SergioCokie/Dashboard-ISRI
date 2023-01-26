<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nick_usuario',
        'password_usuario',
        'estado_usuario',
        'fecha_reg_usuario'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password_usuario',
        //'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Models\Rol', 'permiso_usuario', 'id_usuario', 'id_rol')
            ->using('App\Models\PermisoUsuario')
            ->withPivot([
                'id_permiso_usuario',
                'estado_permiso_usuario'
            ]);
    }

    //Check if the roles is active and if the user has this role assigned.
    public function hasRole($id_usuario, $id_rol)
    {
        $rol = Rol::find($id_rol);
        $contador = 0;
        if ($rol) {
            foreach ($rol->usuarios as $user) {
                if ($user->pivot->id_usuario==$id_usuario && $user->pivot->estado_permiso_usuario==1) {
                    $contador++;
                }
            }
        }
        if ($contador == 0) {
            return false;
        } else {
            return true;
        }
        
    }
}
