<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureApiSecret
{
    public function handle(Request $request, Closure $next): Response
    {
        $expected = env('API_SECRET_KEY');
        $provided = $request->header('X-API-KEY')
            ?? $request->header('Authorization');

        if ($provided && str_starts_with($provided, 'Bearer ')) {
            $provided = substr($provided, 7);
        }

        if (empty($expected) || ! hash_equals((string) $expected, (string) $provided)) {
            return response()->json([
                'message' => 'Unauthorized.',
            ], 401);
        }

        return $next($request);
    }
}
