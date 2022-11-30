<?php

namespace App\Http\Middleware;

use App\Http\Livewire\TrackRequestForm;
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

            if (!$request->session()->exists('user')) {
                    return redirect()->route('home');
            }


        return $next($request);
    }
}
