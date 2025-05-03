<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Cek apakah user ada dan memiliki role yang valid
        if (!$request->user() || !$request->user()->role) {
            return redirect('/login')->with('error', 'Silahkan Login Terlebih Dahulu');
        }

        // Cek apakah role user sesuai dengan yang diinginkan
        if (!in_array($request->user()->role, $roles)) {
            abort(403, 'Unauthorized.');
        }

        return $next($request);
    }
}
