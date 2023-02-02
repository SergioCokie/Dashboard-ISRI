<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Rol;
use App\Models\Sistema;
use App\Models\Menu;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Auth/Login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function getMenus(Request $request, $id_rol)
    {
        $id_usuario = $request->user()->id_usuario;
        $user = User::find($id_usuario);
        if ($user->hasRole($id_usuario, $id_rol)) {
            $rol = Rol::find($id_rol);
            $rolxsistema = [];
            $rolxsistema['id_rol'] = $rol->id_rol;
            $rolxsistema['rol'] = $rol->nombre_rol;
            $rolxsistema['sistema'] = $rol->sistema->nombre_sistema;
            $menu_padre = [];

            foreach ($rol->menus as $menu) {
                if ($menu->pivot->estado_acceso_menu == 1) {
                    $menu_hijos = [];
                    $menu_submenu = [];
                    if ($menu->id_menu_padre == null && $menu->estado_menu == 1) {
                        $hijos = Menu::where("id_menu_padre", $menu->id_menu)->get();
                        foreach ($hijos as $hijo) {
                            if ($hijo->estado_menu == 1) {
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
                        }
                        $menu_submenu['menu'] = $menu->nombre_menu;
                        $menu_submenu['submenu'] = $menu_hijos;
                        array_push($menu_padre, $menu_submenu);
                    }
                }
            }
            $rolxsistema['urls'] = $menu_padre;
            return Inertia::render('ActivoFijo/index', [
                'menu' => $rolxsistema,
            ]);
        } else {
            return redirect(route('dashboard'));
        }
    }
    static public function getMenus2(Request $request, $id_rol, $id_menu)
    {
        $menu = Menu::find($id_menu);
        $page = $menu->page;
        $id_usuario = $request->user()->id_usuario;
        $user = User::find($id_usuario);
        if ($user->hasRole($id_usuario, $id_rol) && $menu->estado_menu==1) {
            $rol = Rol::find($id_rol);
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
                            if ($hijo->estado_menu == 1) {
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
                        }
                        $menu_submenu['menu'] = $menu->nombre_menu;
                        $menu_submenu['submenu'] = $menu_hijos;
                        array_push($menu_padre, $menu_submenu);
                    }
                }
            }
            $rolxsistema['urls'] = $menu_padre;
            return Inertia::render($page, [
                'menu' => $rolxsistema,
            ]);
            //return $rolxsistema;
        } else {
            return redirect(route('dashboard'));
        }
    }
    //aqui?
}
