<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\File;

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
        return redirect('/service');
    }

    public function deletesv($id)
    {
        $service = Service::find($id);
        $image_Path = public_path('/serviceimg/' . $service->banner);
        if (file_exists($image_Path)) {
            unlink($image_Path);
        }
        $service->delete();
        return redirect()->back();
    }


    public function edit($id)
    {
        $services = Service::find($id);
        return view('backend.seedservices', compact('services'));
    }

    public function update(Request $request, $id)
    {

        $filename = '';

        if ($request->hasFile('banner')) {
            $existingService = Service::find($id);

            // Delete old image file if it exists
            if ($existingService->banner) {
                File::delete(public_path($existingService->banner));
            }

            $filename = $request->getSchemeAndHttpHost() . '/serviceimg/' . time() . '.' . $request->banner->extension();
            $request->banner->move(public_path('/serviceimg/'), $filename);
        }

        Service::find($id)->update([
            'banner' => $filename, // เก็บที่อยู่ของไฟล์ภาพ
            'linkservice' => $request->linkservice,
            'content' => $request->content,
        ]);

        return redirect('/service');
    }
}
