<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
{
    public function handle($request, Closure $next)
    {
    	if(!$request->session()->has('admin')){
    		return redirect()->route('login');
    	}else{
    		return $next($request);
    	}
    }

}