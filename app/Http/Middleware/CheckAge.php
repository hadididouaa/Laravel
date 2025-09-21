<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    public function handle(Request $request, Closure $next): Response
    {
        $age = $request->query('age');
        
        // Vérifier si l'âge est fourni et s'il est >= 18
        if (!$age || $age < 18) {
            return redirect()->route('access-refuse');
        }
        
        return $next($request);
    }
}