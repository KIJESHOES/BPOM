<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visit;
class TrackVisitor
{
        public function handle($request, Closure $next)
        {
            Visit::create([
                'ip_address' => $request->ip(),
                'user_agent' => $request->header('User-Agent'),
            ]);

        return $next($request);
    }
}
