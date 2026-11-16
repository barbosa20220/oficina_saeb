<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificarLogin
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('usuario')) {
            return redirect('/');
        }

        return $next($request);
    }
}
