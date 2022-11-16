<?php

namespace App\Http\Middleware;

use App\Models\EmployeeRequest;
use Closure;
use Illuminate\Http\Request;

class CheckReq
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

        $user = EmployeeRequest::where('tracking_number');
            if ($user === null) {
                    return redirect()->route('home');
            }


        return $next($request);
    }
}
