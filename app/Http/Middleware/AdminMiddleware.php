<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (
            ! $request->user() ||
            $request->user()->email !== config('admin.email')
        ) {
            abort(403, 'No tienes autorización para acceder.');
        }

        return $next($request);
    }
}
