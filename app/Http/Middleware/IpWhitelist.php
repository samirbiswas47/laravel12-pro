<?php
namespace App\Middleware;

use Closure;
use Illuminate\Http\Request;

class IpWhitelist
{
    protected array $whitelistedIps = [
        '127.0.0.1',      // localhost
        '203.0.113.1',    // your actual IP
    ];

    public function handle(Request $request, Closure $next)
    {
        if (!in_array($request->ip(), $this->whitelistedIps)) {
            abort(403, 'Access denied. Your IP is not allowed.');
        }

        return $next($request);
    }
}
