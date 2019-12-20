<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next, $role)
    {
        if (! $request->user()->hasRole($role)) {
            abort(401, 'This action is unauthorized.');
        }
        return $next($request);
    }

    // public function handle($request, Closure $next)
    // {
    //     if (Auth::user()->hasAnyRole('ROLE_ADMIN')){
    //         return $next($request);
    //     }
    //     return redirect('home');
    // }

    // public function handle($request, Closure $next)
    //     {
    //     $roles = $request->user()->roles;
    //     foreach ($roles as $role) {
    //         if($role->name === 'ROLE_SUPERADMIN')
    //             // If user is super-admin, accept the request
    //             return $next($request);
    //     }
    //     // If user does not have the super-admin role redirect them to another page that isn't restricted
    //     return redirect('/home');
    // }
}
