<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AuthenticateMiddleware
{
  
   
        public function handle(Request $request, Closure $next)
        {
            // ตรวจสอบสถานะการล็อกอิน
            if (!Auth::check()) {
                // หากไม่ได้ล็อกอิน ส่งผู้ใช้งานไปยังหน้าล็อกอิน
                return redirect('/loginAD');
            }
    
            // หากล็อกอินอยู่แล้ว ให้ผ่านไปยัง Route ต่อไป
            return $next($request);
        }
   
}