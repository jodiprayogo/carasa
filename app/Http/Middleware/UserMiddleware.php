<?php
namespace App\Http\Middleware;
use Closure;
use Auth;
class UserMiddleware
{
    public function handle($request, Closure $next)
    {
        if(Auth::user()->role=='admin'){
            return $next($request);
        }else{
            return back();
        }
    }
}
?>