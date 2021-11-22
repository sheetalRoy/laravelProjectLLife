<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\UnauthorizedException;

class CodeAuth
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
        $code = $request->headers->get('x-user-code');
        $user = User::where('code', $code)->first();
        
        if (is_null($user)) {
            throw new AuthenticationException();
        }
        $request->attributes->add(['user' => $user]);
        return $next($request);
    }
}
