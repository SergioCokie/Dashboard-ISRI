<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;
use Tightenco\Ziggy\Ziggy;
use App\Models\Menu;
use App\Models\User;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        if ($request->user()) {
            $r_object = (object) $request->user()->roles()->get();
            $id_usuario = $request->user()->id_usuario;
            $user = User::find($id_usuario);
            $roles = [];
            foreach ($r_object as $rol) {
                if ($user->hasRole($id_usuario,$rol->id_rol)) {
                    $rolxsistema = [];
                    $rolxsistema['id_rol'] = $rol->id_rol;
                    $rolxsistema['rol'] = $rol->nombre_rol;
                    $rolxsistema['sistema'] = $rol->sistema->nombre_sistema;
                    $menu_padre = [];

                    foreach ($rol->menus as $menu) {
                        if ($menu->pivot->estado_acceso_menu == 1) {
                            $menu_hijos = [];
                            $menu_submenu = [];
                            if ($menu->id_menu_padre == null) {
                                $hijos = Menu::where("id_menu_padre", $menu->id_menu)->get();
                                foreach ($hijos as $hijo) {
                                    foreach ($hijo->roles as $hijo_rol) {
                                        if ($hijo_rol->pivot->estado_acceso_menu == 1 && $hijo_rol->pivot->id_rol == $rol->id_rol) {
                                            $array_hijo['id_menu'] = $hijo->id_menu;
                                            $array_hijo['nombre_submenu'] = $hijo->nombre_menu;
                                            $array_hijo['nombre_ruta'] = $hijo->nombre_ruta;
                                            $array_hijo['url'] = $hijo->url_menu;
                                            array_push($menu_hijos, $array_hijo);
                                            $array_hijo = [];
                                        }
                                    }
                                }
                                $menu_submenu['menu'] = $menu->nombre_menu;
                                $menu_submenu['submenu'] = $menu_hijos;
                                array_push($menu_padre, $menu_submenu);
                            }
                        }
                    }
                    $rolxsistema['urls'] = $menu_padre;
                    array_push($roles, $rolxsistema);
                }
            }
        }

        return array_merge(parent::share($request), [
            'auth' => [
                'user' => $request->user(),
            ],
            'ziggy' => function () use ($request) {
                return array_merge((new Ziggy)->toArray(), [
                    'location' => $request->url(),
                ]);
            },
            "menus" => $request->user() ? $roles : [],
        ]);
    }
}
