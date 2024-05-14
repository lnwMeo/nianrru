<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announce;

use Illuminate\Support\Facades\File;

class AnnounceController extends Controller
{
    public function indexAn()
    {
        $announces = Announce::orderByDesc('id')->get();
        // dd($announces);
        return view('backend.announce')->with('announces', $announces);
    }


    public function FormAn()
    {
        return view('backend.addannounce');
    }

    public function storeAn(Request $request)
    {
        $request->validate([
            'imgannounce' => 'required|image|mimes:png|max:5120',
        ], [
            'imgannounce.required' => 'โปรดใส่รูปประกาศ',
            'imgannounce.max' => 'ขนาดรูปภาพของคุณเกิน 5 MB'
        ]);

        if (!Announce::exists()) {
            $filename = '';

            if ($request->hasFile('imgannounce')) {

                $filename = $request->getSchemeAndHttpHost() . '/imgAn/' . time() . '.' . $request->imgannounce->extension();

                $request->imgannounce->move(public_path('/imgAn/'), $filename);
            }

            // dd($filename);
            Announce::create([
                'imgannounce' => $filename,

            ]);
            return redirect('/indexannounce');
        } else {
            return redirect('/indexannounce');
        }
    }

    function change($id)
    {
        $Anonooff = Announce::find($id);
        $data = [
            'status' => !$Anonooff->status
        ];
        $Anonooff = Announce::find($id)->update($data);
        return redirect()->back();
    }

    public function deleteAn($id)
    {
        $announces = Announce::find($id);
        $image_Path = public_path('/imgAn/' . $announces->imgannounce);

        if (file_exists($image_Path)) {

            unlink($image_Path);
        }
        // dd($image_Path);
        $announces->delete();
        return redirect()->back();
    }


    public function editan($id)
    {
        $announces = Announce::find($id);
        return view('backend.editannounce', compact('announces'));
    }


    public function updatean(Request $request, $id)
    {
        $filename = '';
        if ($request->hasFile('imgannounce')) {
            // ตรวจสอบว่ามีรูปภาพใหม่ถูกส่งมาหรือไม่
            $existingService = Announce::find($id);

            // ลบรูปภาพเก่าออกจากระบบ
            if ($existingService->banner) {
                File::delete(public_path($existingService->imgannounce));
            }

            // อัปโหลดรูปภาพใหม่
            $filename = $request->getSchemeAndHttpHost() . '/imgAn/' . time() . '.' . $request->imgannounce->extension();
            $request->imgannounce->move(public_path('/imgAn/'), $filename);
        } else {
            // ใช้รูปภาพเดิมหากไม่มีการส่งรูปภาพใหม่มา
            $existingService = Announce::find($id);
            $filename = $existingService->imgannounce;
        }
        Announce::find($id)->update([
            'imgannounce' => $filename,
        ]);
        return redirect('/indexannounce');
    }
}
