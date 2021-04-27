<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
// use Silber\Bouncer\Bouncer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // $user = Auth::user();
        // $boolean = $user->isNotAn('admin');
        // // dd($boolean);

        if(Auth::user()->isNotAn('admin')){
            abort('403');
        }else{
            return $next($request);
        };

    }
}
