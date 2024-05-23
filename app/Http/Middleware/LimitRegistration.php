<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class LimitRegistration
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // นับจำนวนผู้ใช้ทั้งหมด
        $userCount = User::count();

        // ตรวจสอบว่าผู้ใช้เกิน 3 คนหรือไม่
        if ($userCount >= 3) {
            // ถ้าเกิน ส่ง redirect พร้อมข้อความ error
            return redirect()->back()->withErrors(['error' => 'จำนวนผู้ใช้เกินขีดจำกัด']);
        }

        return $next($request);
    }
}
