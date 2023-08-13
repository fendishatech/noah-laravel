<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MemberAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $member = $request->session()->get('member');
        // if ($member && $request->member->id == $member->id) {
        //     return $next($request);
        // }
        if ($member) {
            return $next($request);
        }

        return redirect('/auth/login');
    }
}
