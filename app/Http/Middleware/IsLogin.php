<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle( $request, Closure $next)
    {


        // check if sender is login
        if( Auth::check() )
        {
            return $next($request);
        }
        return redirect( route('login') );
    }
}
