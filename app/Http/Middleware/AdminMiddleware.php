<?php
namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        if(Auth::check())
        {
            if(Auth::user()->role_as == '1')//1=Admin, 0 = user
            {
                return $next($request);
            }
            else
            {
                return redirect('/home')->with('status','Access Denied! As you are not an Admin');
            }
        }
        else{
            return redirect('/login')->with('status','Please Login First');
        }

        return $next($request);
    }
}
