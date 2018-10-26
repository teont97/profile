<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        if(Auth::check()){
            $user= Auth::user();
            return $next($request);
       }
        else{
           return redirect('/admin/login');
       }
    }
}
