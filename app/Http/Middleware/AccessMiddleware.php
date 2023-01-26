<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $url = $request->path();
        $url2= "/".$url;

        $allowed_url = false;
        $r_object = (object) $request->user()->roles()->get();
        foreach ($r_object as $rol) {
            foreach ($rol->menus as $menu) {
                if ($menu->pivot->estado_acceso_menu == 1 && $menu->url_menu == $url2) {
                    $allowed_url = true;
                }
            }
        }

        if ($allowed_url)
            return $next($request);

        return redirect('dashboard');
    }
}
