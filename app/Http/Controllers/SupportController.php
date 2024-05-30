<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Support;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;


class SupportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function  Formsupport()
    {
        $supports = Support::orderByDesc('id')->get();
        return view('backend.sesupport', compact('supports'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png|max:5120',
            'contect' => 'required|max:100',
            'linksp' => 'required|url'
        ], [
            'image.required' => 'โปรดใส่รูป',
            'image.max' => 'ขนาดรูปภาพของคุณเกิน 5 MB',
            'image.mimes' => 'โปรดใส่รูปภาพประเภท jpg หรือ png',
            'contect.required' => 'โปรดใส่ข้อมูลติดต่อ',
            'contect.max' => 'ข้อมูลติดต่อเกิน 50 ตัวอักษร',
            'linksp.required' => 'โปรดแนบลิงค์ที่ต้องการ',
        ]);
    
        // ตรวจสอบว่ามีข้อมูลอยู่ในฐานข้อมูลหรือไม่
        if (!Support::exists()) {
            $fileUrl = '';
    
            if ($request->hasFile('image')) {
                $filename = time() . '.' . $request->image->extension();
                $path = $request->image->storeAs('public/imageuplode', $filename);
                $fileUrl = Storage::url($path); // แปลงเป็น URL ที่สามารถเข้าถึงได้
            }
    
            $data = Support::create([
                'image' => $fileUrl, // เก็บที่อยู่ของไฟล์ภาพ
                'contect' => $request->contect,
                'linksp' => $request->linksp,
            ]);
    
            Alert::success('Success', 'เพิ่ม ข้อมูลสำเร็จ');
            return redirect('/support');
        } else {
            Alert::error('Error', 'ข้อมูลเต็มแล้ว');
            return redirect('/support');
        }
    }

    public function deletesp($id)
    {
        $support = Support::find($id);
        
        if ($support && $support->image) {
            // ลบไฟล์ภาพจากโฟลเดอร์ storage
            $fileName = 'public/imageuplode/' . basename($support->image);
            if (Storage::exists($fileName)) {
                Storage::delete($fileName);
            }
        }
        
        // ลบข้อมูลจากฐานข้อมูล
        $support->delete();
        Alert::success('Success', 'ลบ ข้อมูลสำเร็จ');
        return redirect()->back();
    }


    public function editsp($id)
    {
        $supports = Support::find($id);
        return view('backend.swedsupport', compact('supports'));
    }

    public function updatesp(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,png|max:5120',
            'contect' => 'required|max:100',
            'linksp' => 'required|url'
        ], [
            'image.image' => 'ไฟล์ต้องเป็นรูปภาพ',
            'image.mimes' => 'โปรดใส่รูปภาพประเภท jpg หรือ png',
            'image.max' => 'ขนาดรูปภาพของคุณเกิน 5 MB',
            'contect.required' => 'โปรดใส่ข้อมูลติดต่อ',
            'contect.max' => 'ข้อมูลติดต่อเกิน 100 ตัวอักษร',
            'linksp.required' => 'โปรดแนบลิงค์ที่ต้องการ',
        ]);
    
        $existingService = Support::find($id);
        $filename = $existingService->image; // ใช้รูปภาพเดิมหากไม่มีการส่งรูปภาพใหม่มา
    
        if ($request->hasFile('image')) {
            // ลบรูปภาพเก่าออกจากระบบ
            if ($existingService->image) {
                $oldFilePath = 'public/imageuplode/' . basename($existingService->image);
                if (Storage::exists($oldFilePath)) {
                    Storage::delete($oldFilePath);
                }
            }
    
            // อัปโหลดรูปภาพใหม่
            $filename = 'imageuplode/' . time() . '.' . $request->image->extension();
            $path = $request->image->storeAs('public', $filename);
            $filename = Storage::url($path); // แปลงเส้นทางไฟล์เป็น URL ที่เข้าถึงได้
        }
    
        $existingService->update([
            'image' => $filename, // เก็บที่อยู่ของไฟล์ภาพ
            'contect' => $request->contect,
            'linksp' => $request->linksp,
        ]);
    
        Alert::success('Success', 'อัพเดท ข้อมูลสำเร็จ');
        return redirect('/support');
    }
}
