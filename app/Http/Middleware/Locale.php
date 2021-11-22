<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\UnauthorizedException;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     * @throws AuthenticationException
     */
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);

        if (is_null($locale)) {
            App::setLocale('en');
        }
        App::setLocale($locale);
        return $next($request);
    }
}
