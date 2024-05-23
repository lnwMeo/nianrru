<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function Formlogin()
    {
        return view('auth.login');
    }

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::check()) {
                view()->share('loggedInUser', Auth::user());
            }
            return $next($request);
        });
    }

    public function showusers()
    {
        $users = User::orderByDesc('id')->get();
        return view('backend.users', compact('users'));
    }

    public function addusers()
    {
        return view('backend.addusers');
    }


    public function login(Request $request)
    {
        $users = $request->only('username', 'password');

        $validator =  Validator::make(
            $users,
            [
                'username' => 'required|string',
                'password' => 'required|string'
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if (Auth::attempt($users)) {
            $request->session()->regenerate();
            Alert::success('Success', 'เข้าสู่ระบบสำเร็จ');
            return redirect()->intended('/dashbord');
        } else {

            // ถ้าข้อมูลการเข้าสู่ระบบไม่ถูกต้อง
            Alert::error('Error', 'Username Password ผิดพลาด');
            return redirect()->back();
        }
    }



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 
        Alert::success('Success', 'Logout สำเร็จ');
        return redirect()->route('auth.login');
    }



    public function registerADS(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                'regex:/[a-z]/',      // ต้องมีตัวอักษรพิมพ์เล็ก
                'regex:/[A-Z]/',      // ต้องมีตัวอักษรพิมพ์ใหญ่
                'regex:/[0-9]/',      // ต้องมีตัวเลข
                'regex:/[@$!%*?&]/',  // ต้องมีอักขระพิเศษ
            ],
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'username.required' => 'โปรดใส่ Username',
            'username.unique' => 'Username นี้มีผู้ใช้แล้ว',
            'email.required' => 'โปรดใส่ email',
            'email.email' => 'รูปแบบ email ไม่ถูกต้อง',
            'email.unique' => 'Email นี้มีผู้ใช้แล้ว',
            'password.required' => 'โปรดใส่ password',
            'password.min' => 'โปรดใส่ password ไม่น้อยกว่า 8 ตัวอักษร',
            'password.regex' => 'รหัสผ่านต้องมีตัวอักษรพิมพ์เล็ก, ตัวอักษรพิมพ์ใหญ่, ตัวเลข และอักขระพิเศษ',
            'password.confirmed' => 'password ไม่ตรงกัน',
            'avatar.image' => 'ไฟล์ที่อัพโหลดต้องเป็นรูปภาพ',
            'avatar.mimes' => 'ไฟล์รูปภาพต้องเป็นประเภท jpeg, png, jpg, gif, หรือ svg',
            'avatar.max' => 'ไฟล์รูปภาพต้องมีขนาดไม่เกิน 2MB',
        ]);

        $userCount = User::count();
        $validator->after(function ($validator) use ($userCount) {
            if ($userCount >= 3) {
                $validator->errors()->add('user_limit', 'จำนวนผู้ใช้เกินขีดจำกัด');
            }
        });

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // สร้างผู้ใช้ใหม่
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->email_verified_at = now();
        $user->password = Hash::make($request->password);

        // จัดการอัพโหลดรูปภาพ
        if ($request->hasFile('avatar')) {
            $avatarName = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('avatars'), $avatarName);
            $user->avatar = '/avatars/' . $avatarName;
        } else {
            $user->avatar = '/avatars/default.gif'; // Default avatar path
        }

        $user->save();

        Alert::success('Success', 'เพิ่ม Users สำเร็จ');
        return redirect()->route('auth.showuser');
    }


    public function DeleteUser($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'ไม่พบผู้ใช้ที่ต้องการลบ']);
        }

        // ลบรูปภาพ avatar ถ้ามี
        if ($user->avatar && $user->avatar !== '/avatars/default.gif') {
            $avatarPath = public_path($user->avatar);
            if (file_exists($avatarPath)) {
                unlink($avatarPath);
            }
        }

        $user->delete();

        Alert::success('Success', 'ลบผู้ใช้สำเร็จ');
        return redirect()->route('auth.showuser');
    }

    public function editusers($id)
    {
        $users = User::find($id);
        return view('backend.edusers',compact('users'));
    }

    public function updateusers(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'ไม่พบผู้ใช้ที่ต้องการแก้ไข']);
        }

        // สร้าง validator
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => [
                'nullable',
                'string',
                'min:8',
                'confirmed',
                'regex:/[a-z]/',      // ต้องมีตัวอักษรพิมพ์เล็ก
                'regex:/[A-Z]/',      // ต้องมีตัวอักษรพิมพ์ใหญ่
                'regex:/[0-9]/',      // ต้องมีตัวเลข
                'regex:/[@$!%*?&]/',  // ต้องมีอักขระพิเศษ
            ],
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'username.required' => 'โปรดใส่ Username',
            'username.unique' => 'Username นี้มีผู้ใช้แล้ว',
            'email.required' => 'โปรดใส่ email',
            'email.email' => 'รูปแบบ email ไม่ถูกต้อง',
            'email.unique' => 'Email นี้มีผู้ใช้แล้ว',
            'password.min' => 'โปรดใส่ password ไม่น้อยกว่า 8 ตัวอักษร',
            'password.regex' => 'รหัสผ่านต้องมีตัวอักษรพิมพ์เล็ก, ตัวอักษรพิมพ์ใหญ่, ตัวเลข และอักขระพิเศษ',
            'password.confirmed' => 'password ไม่ตรงกัน',
            'avatar.image' => 'ไฟล์ที่อัพโหลดต้องเป็นรูปภาพ',
            'avatar.mimes' => 'ไฟล์รูปภาพต้องเป็นประเภท jpeg, png, jpg, gif, หรือ svg',
            'avatar.max' => 'ไฟล์รูปภาพต้องมีขนาดไม่เกิน 2MB',
        ]);

        // Check if the validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // อัปเดตข้อมูลผู้ใช้
        $user->username = $request->username;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // จัดการอัพโหลดรูปภาพ
        if ($request->hasFile('avatar')) {
            // ลบรูปภาพเดิมถ้ามี
            if ($user->avatar && $user->avatar !== '/avatars/default.gif') {
                $oldAvatarPath = public_path($user->avatar);
                if (file_exists($oldAvatarPath)) {
                    unlink($oldAvatarPath);
                }
            }

            $avatarName = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path('avatars'), $avatarName);
            $user->avatar = '/avatars/' . $avatarName;
        }

        $user->save();

        Alert::success('Success', 'อัปเดตผู้ใช้สำเร็จ');
        return redirect()->route('auth.showuser');
    }
}
