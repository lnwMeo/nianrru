<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
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

            $filename = $request->getSchemeAndHttpHost() . '/serviceimg/' . time() . '.' . $request->banner->extension();

            $request->banner->move(public_path('/serviceimg/'), $filename);
        }

        Service::create([
            'banner' => $filename, // เก็บที่อยู่ของไฟล์ภาพ
            'linkservice' => $request->linkservice,
            'content' => $request->content,
        ]);
        // dd($data);
        Alert::success('Success', 'เพิ่ม ข้อมูลสำเร็จ');
        return redirect('/service');
    }

    //ใช้ได้
    // public function uploadck(Request $request)
    // {
    //     if ($request->hasFile('upload')) {
    //         $originName = $request->file('upload')->getClientOriginalName();
    //         $fileName = pathinfo($originName, PATHINFO_FILENAME);
    //         $extension = $request->file('upload')->getClientOriginalExtension();
    //         $fileName = $fileName . '_' . time() . '.' . $extension;

    //         $request->file('upload')->move(public_path('media'), $fileName);

    //         $url = asset('media/' . $fileName);
    //         return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
    //     }
    // }
    public function uploadck(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = time() . '.' . $extension; // สร้างชื่อไฟล์ใหม่โดยใช้ timestamp

            // ย้ายไฟล์ไปยังโฟลเดอร์ 'media' และให้ใช้ชื่อไฟล์ที่สร้างขึ้นใหม่
            $request->file('upload')->move(public_path('media'), $fileName);

            // สร้าง URL สำหรับไฟล์ที่อัปโหลดและส่งกลับไปให้กับผู้ใช้
            $url = asset('media/' . $fileName);

            // ส่งข้อมูล JSON กลับไป
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
        
    }




    public function deletesv($id)
    {
        $service = Service::find($id);
       
        unlink(('serviceimg/' . basename($service->banner)));


        preg_match_all('/<img.*?src="(.*?)".*?>/i', $service->content, $matches);
        // หากพบ URL ของไฟล์ภาพ
        if (!empty($matches[1])) {
            foreach ($matches[1] as $imageUrl) {
                // ดึงชื่อไฟล์เท่านั้นจาก URL ด้วย basename()
                $fileName = basename($imageUrl);
                // ลบไฟล์ภาพ
                if (file_exists(public_path('media/' . $fileName))) {
                    unlink(public_path('media/' . $fileName));
                }
            }
        }
        
        $service->delete();
        Alert::success('Success', 'ลบข้อมูลสำเร็จ');
        return redirect()->back();
    }

    //ใช้งานได้
    // public function deletesv($id)
    // {
    //     $service = Service::find($id);
    //     unlink(('serviceimg/' . basename($service->banner)));
    //     $service->delete();
    //     Alert::success('Success','ลบข้อมูลสำเร็จ');
    //     return redirect()->back();
    // }


    public function edit($id)
    {
        $services = Service::find($id);
        return view('backend.seedservices', compact('services'));
    }

    public function update(Request $request, $id)
    {
        $existingService = Service::find($id);

        if ($request->hasFile('banner')) {
            // Delete old image file if it exists
            if ($existingService->banner) {
                File::delete(public_path($existingService->banner));
            }
            $filename = '/serviceimg/' . time() . '.' . $request->banner->extension();
            $request->banner->move(public_path('/serviceimg/'), $filename);
        } else {
            // Use the existing banner if no new file is uploaded
            $filename = $existingService->banner;
        }



        $existingService->update([
            'banner' => $filename, // เก็บที่อยู่ของไฟล์ภาพ
            'linkservice' => $request->linkservice,
            'content' => $request->content,
        ]);
Alert::success('Success', 'อัพเดท ข้อมูลสำเร็จ');
        return redirect('/service');
    }
}
