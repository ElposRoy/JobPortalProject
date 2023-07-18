<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    protected function redirectTo(Request $request): ?string
{
    if (!$request->expectsJson() && !auth()->check()) {
        return route('login');
    }

    $user = auth()->user();

    if ($user->role === 'jobseeker') {
        return route('jobseeker');
    } elseif ($user->role === 'admin') {
        return route('admin');
    }

    return null;
}
}