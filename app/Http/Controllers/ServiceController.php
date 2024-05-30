<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;


class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function indexservice()
    {
        $services = Service::orderByDesc('id')->get();
        return view('backend.seservices', compact('services'));
    }

    public function Formservice()
    {
        return view('backend.mdservices');
    }

    public function servicestore(Request $request)
    {
        $request->validate(
            [
                'banner' => 'required|image|mimes:png|max:5120',
                'linkservice' => 'nullable|url|required_without:content',
                'content' => 'nullable|required_without:linkservice'
            ],
            [
                'banner.required' => 'โปรดใส่รูป',
                'banner.max' => 'ขนาดรูปภาพของคุณเกิน 5 MB',
                'linkservice.required_without' => 'โปรดใส่ลิงค์หรือเนื้อหา',
                'content.required_without' => 'โปรดใส่ลิงค์หรือเนื้อหา',
            ]
        );

        $filename = '';

        if ($request->hasFile('banner')) {
            $filename = time() . '.' . $request->banner->extension();
            $path = $request->banner->storeAs('public/serviceimg', $filename);
            $fileUrl = $request->getSchemeAndHttpHost() . '/storage/serviceimg/' . $filename;
        }

        Service::create([
            'banner' => $fileUrl, // เก็บที่อยู่ของไฟล์ภาพ
            'linkservice' => $request->linkservice,
            'content' => $request->content,
        ]);

        Alert::success('Success', 'เพิ่มข้อมูลสำเร็จ');
        return redirect('/service');
    }


    public function uploadck(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = time() . '.' . $extension; // สร้างชื่อไฟล์ใหม่โดยใช้ timestamp

            $path = $request->file('upload')->storeAs('public/media', $fileName);

            // สร้าง URL สำหรับไฟล์ที่อัปโหลดและส่งกลับไปให้กับผู้ใช้
            $url = Storage::url('media/' . $fileName);

            // ส่งข้อมูล JSON กลับไป
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }





    public function deletesv($id)
    {
        $service = Service::find($id);

        if ($service) {
            // ลบไฟล์แบนเนอร์
            $bannerPath = 'public/serviceimg/' . basename($service->banner);
            if (Storage::exists($bannerPath)) {
                Storage::delete($bannerPath);
            }

            // หาและลบไฟล์ภาพในเนื้อหา
            preg_match_all('/<img.*?src="(.*?)".*?>/i', $service->content, $matches);
            if (!empty($matches[1])) {
                foreach ($matches[1] as $imageUrl) {
                    $fileName = basename($imageUrl);
                    $imagePath = 'public/media/' . $fileName;
                    if (Storage::exists($imagePath)) {
                        Storage::delete($imagePath);
                    }
                }
            }

            // ลบรายการจากฐานข้อมูล
            $service->delete();

            // แสดงข้อความสำเร็จ
            Alert::success('Success', 'ลบข้อมูลสำเร็จ');
        } else {
            // แสดงข้อความข้อผิดพลาดหากไม่พบรายการ
            Alert::error('Error', 'ไม่พบข้อมูล');
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        $services = Service::find($id);
        return view('backend.seedservices', compact('services'));
    }

    public function update(Request $request, $id)
    {
        $existingService = Service::find($id);

        if ($request->hasFile('banner')) {
            // ลบไฟล์ภาพเก่าถ้ามี
            if ($existingService->banner) {
                Storage::delete('public/serviceimg/' . basename($existingService->banner));
            }

            // อัปโหลดไฟล์ใหม่
            $filename = time() . '.' . $request->banner->extension();
            $path = $request->file('banner')->storeAs('public/serviceimg', $filename);
            $filename = Storage::url($path); // แปลงเป็น URL ที่เข้าถึงได้
        } else {
            // ใช้ไฟล์ภาพเดิมถ้าไม่มีการอัปโหลดไฟล์ใหม่
            $filename = $existingService->banner;
        }

        // อัปเดตข้อมูลในฐานข้อมูล
        $existingService->update([
            'banner' => $filename, // เก็บที่อยู่ของไฟล์ภาพ
            'linkservice' => $request->linkservice,
            'content' => $request->content,
        ]);

        Alert::success('Success', 'อัพเดท ข้อมูลสำเร็จ');
        return redirect('/service');
    }
}
