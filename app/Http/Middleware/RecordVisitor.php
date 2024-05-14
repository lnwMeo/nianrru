<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Countip;

class RecordVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $ipAddress = $request->ip();

        if (!Countip::where('views_conut', $ipAddress)->exists()) {
            Countip::create(['views_conut' => $ipAddress]);
        }


        return $next($request);
    }
}
