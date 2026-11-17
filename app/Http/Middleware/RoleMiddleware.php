<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(
        Request $request,
        Closure $next,
        string $roles
    ): Response {

        $user = $request->user();

        $allowedRoles = explode(',', $roles);

        if (!$user || !$user->isActive()) {
            abort(403);
        }

        if (!in_array(
            $user->role->value,
            $allowedRoles,
            true
        )) {
            abort(403);
        }

        return $next($request);
    }
}