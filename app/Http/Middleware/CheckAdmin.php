<?php

namespace App\Http\Middleware;

use App\Constants\CommonConstants;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
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
        if(Auth::guest()) {
            return redirect()->guest('admin/dang-nhap');
        }

        if(Auth::user()->role != CommonConstants::role_admin && Auth::user()->role != CommonConstants::role_host) {
            Auth::logout();
            return redirect()->guest('admin/dang-nhap')->with('notification','Lỗi: Bạn không có quyền truy cập!');
        }
        return $next($request);
    }
}
