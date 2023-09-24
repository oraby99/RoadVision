<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;

class isApiUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->has('remember_token'))
         {
            if($request->remember_token !== null)
            {
                $user = User::where('remember_token', $request->remember_token)->first();
                if($user !== null)
                {
                return $next($request);
                }
                else
                {
                return response()->json( [
                    'status'  => '404',
                    "message" => "This Access Token Is Not Correct",
                    'data'   => NULL

                ]);
                }
            }
            else
            {
            return response()->json([
                'status'  => '404',
                "message" => "This Access Token Is Empty",
                'data'   => NULL

            ]);
            }
         }
         else
         {
         return response()->json([
            'status'  => '404',
            "message" => "There Is No Access Token ",
            'data'   => NULL

         ]);
         }
    }
}
