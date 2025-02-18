<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // For logging

class SuperAdminAuth
{
    public function handle(Request $request, Closure $next)
{
   

    if (!session()->has('super_admin_authenticated') || session('super_admin_authenticated') !== true) {
        return redirect()->route('super-admin.login')->with('error', 'Access Denied! Super Admins Only.');
    }

    return $next($request);
}
}