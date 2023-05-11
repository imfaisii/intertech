<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class teachersSession
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
        // $type = $request->input("type");
        // if($type != "API"){
        //     $user_id = $request->session()->get('user_id');
        //     if(empty($user_id)){
        //         return redirect(route('floginview'));
        //     }
        // }
        return $next($request);
    }
}
