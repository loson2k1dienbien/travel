<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class checkAdminLogin
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
        if (Auth::check())
        {
            $customer = Auth::user();
            // nếu level =1 (admin), status = 1 (actived) thì cho qua.
            if ($customer->level == 1 && $customer->status == 1)
            {
                return $next($request);
            }
            else
            {
                Auth::logout();
                return redirect()->route('getLogin');
            }
        }
        return redirect('admin/login');

    }
}
