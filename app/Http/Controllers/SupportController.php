<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Support;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

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

        // dd($request->all());
        if (!Support::exists()) {

            $filename = '';

            if ($request->hasFile('image')) {

                $filename = $request->getSchemeAndHttpHost() . '/imageuplode/' . time() . '.' . $request->image->extension();

                $request->image->move(public_path('/imageuplode/'), $filename);
            }

            $data = Support::create([
                'image' => $filename, // เก็บที่อยู่ของไฟล์ภาพ
                'contect' => $request->contect,
                'linksp' => $request->linksp,
            ]);
            Alert::success('Success', 'เพิ่ม ข้อมูลสำเร็จ');
            return redirect('/support');

        } else {
            Alert::error('Error','ข้อมูลเต็มแล้ว');
            return redirect('/support');
        }
    }

    public function deletesp($id)
    {
        $support = Support::find($id);
        unlink(('imageuplode/' . basename($support->image)));
        // dd($image_Path);
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

        $filename = '';

        if ($request->hasFile('image')) {
            // ตรวจสอบว่ามีรูปภาพใหม่ถูกส่งมาหรือไม่
            $existingService = Support::find($id);

            // ลบรูปภาพเก่าออกจากระบบ
            if ($existingService->banner) {
                File::delete(public_path($existingService->image));
            }

            // อัปโหลดรูปภาพใหม่
            $filename = $request->getSchemeAndHttpHost() . '/imageuplode/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/imageuplode/'), $filename);
        } else {
            // ใช้รูปภาพเดิมหากไม่มีการส่งรูปภาพใหม่มา
            $existingService = Support::find($id);
            $filename = $existingService->image;
        }

        Support::find($id)->update([
            'image' => $filename, // เก็บที่อยู่ของไฟล์ภาพ
            'contect' => $request->contect,
            'linksp' => $request->linksp,
        ]);
        Alert::success('Success', 'อัพเดท ข้อมูลสำเร็จ');
        return redirect('/support');
    }
}
