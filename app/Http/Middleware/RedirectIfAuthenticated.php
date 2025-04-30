<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Manipula uma solicitação de entrada.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        // Se não houver guardas especificados, usa o valor padrão [null]
        $guards = empty($guards) ? [null] : $guards;

        // Verifica se o usuário está autenticado em algum dos guards fornecidos
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Se estiver autenticado, redireciona para a página inicial
                return redirect(RouteServiceProvider::HOME);
            }
        }

        // Se não estiver autenticado, permite que a solicitação continue
        return $next($request);
    }
}
