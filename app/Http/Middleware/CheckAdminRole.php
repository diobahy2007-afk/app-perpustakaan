<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminRole
{
    public function handle(Request $request, Closure $next): Response
    {
        // Kalau bukan admin, hentikan request dengan error 403
        if ($request->user()?->role !== 'admin') {
            abort(403, 'Halaman ini hanya bisa diakses oleh admin.');
        }

        // Kalau admin, lanjutkan ke tujuan berikutnya (controller)
        return $next($request);
    }
}