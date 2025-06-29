<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role === 'admin') {

            // 2. Jika user adalah admin, paksa logout untuk keamanan
            //    dan arahkan ke halaman login. Ini mencegah session admin
            //    terbawa ke konteks yang salah.
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            // 3. Redirect ke halaman login dengan pesan error.
            return redirect('/login')
                ->with('error', 'Anda tidak diizinkan mengakses halaman tersebut.');
        }

        return $next($request);
    }
}
