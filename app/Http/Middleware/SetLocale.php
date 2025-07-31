<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
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
        // Si hay un parámetro 'lang' en la URL, cambiar el idioma
        if ($request->has('lang')) {
            $locale = $request->get('lang');
            if (in_array($locale, ['es', 'en'])) {
                App::setLocale($locale);
                Session::put('locale', $locale);
            }
        }
        // Si no hay parámetro pero hay un locale guardado en sesión
        elseif (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        }

        return $next($request);
    }
} 