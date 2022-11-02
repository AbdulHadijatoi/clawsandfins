<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        $isAdmin= explode('/',$request->path())[0] == 'admin'?true:false;
        if (! $request->expectsJson()) {
            return route($isAdmin ? 'admin.login' : 'login');
        }
    }
}
