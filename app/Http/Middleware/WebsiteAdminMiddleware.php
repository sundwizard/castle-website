<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class WebsiteAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $auth_user_type = Auth::user()->user_type;// get the type of user loged in

        if(Auth::user()->user_type==="Website Admin" || Auth::user()->user_type==="Super Admin"){
            if(Auth::user()->status=="Active"){
                return $next($request);
            }else{
                Session::flush();
                return redirect()->route('login')->with("errorfeedback","Sorry your account is disabled kindly contact support for assistance");
            }
        }else{
            Session::flush();
            return redirect()->route('login');
        }
    }
}
