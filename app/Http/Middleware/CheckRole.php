<?php
namespace CodeCommerce\Http\Middleware;
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
    public function handle($request, Closure $next)
    {
        if (!Auth::check()){
            return redirect('auth/login');
        }
        if (Auth::user()->is_admin != 1){
            return redirect('/');
        }
        return $next($request);
    }
}