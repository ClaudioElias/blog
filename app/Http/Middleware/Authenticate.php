<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
<<<<<<< HEAD
        return $request->expectsJson() ? null : route('login.form');
=======
        return $request->expectsJson() ? null : route('login');
>>>>>>> 590ddf35bbda3ade42f4bd51bf7322d09291a5f5
    }
}
